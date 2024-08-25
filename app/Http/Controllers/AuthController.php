<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\PasswordReset;
use App\Models\LoginUser;

class AuthController extends Controller
{
    // Mostrar el formulario de registro
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Manejar el registro de usuarios
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:loginusers',
            'password' => 'required|string|confirmed|min:8',
        ]);

        $user = LoginUser::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Asegúrate de cifrar la contraseña
        ]);

        event(new Registered($user));

        Auth::login($user); // Iniciar sesión automáticamente

        return redirect()->route('home'); // Redirige al usuario a la página de inicio
    }

    // Mostrar el formulario de inicio de sesión
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Manejar el inicio de sesión de usuarios
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt($request->only('email', 'password'))) {
            // Redirigir a la página de inicio si la autenticación es exitosa
            return redirect()->intended('home')->with('status', 'Logged in successfully!');
        }

        // Redirigir de vuelta con un mensaje de error si la autenticación falla
        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

    // Manejar el cierre de sesión
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login')->with('status', 'Logged out successfully!');
    }

    // Mostrar el formulario de recuperación de contraseña
    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    // Enviar enlace de recuperación de contraseña
    public function sendResetLinkEmail(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $response = Password::sendResetLink($request->only('email'));

        return $response == Password::RESET_LINK_SENT
                    ? back()->with('status', 'Password reset link sent!')
                    : back()->withErrors(['email' => 'Email not found.']);
    }

    // Mostrar el formulario de restablecimiento de contraseña
    public function showResetPasswordForm($token)
    {
        return view('auth.reset-password', ['token' => $token]);
    }

    // Manejar el restablecimiento de contraseña
    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);

        $response = Password::reset($request->only('email', 'password', 'token'), function ($user, $password) {
            $user->password = bcrypt($password);
            $user->save();
            event(new PasswordReset($user));
            Auth::login($user);
        });

        return $response == Password::PASSWORD_RESET
                    ? redirect()->route('home')->with('status', 'Password reset successful!')
                    : back()->withErrors(['email' => 'Failed to reset password.']);
    }

    // Confirmar la contraseña antes de actualizarla
    public function showConfirmPasswordForm()
    {
        return view('auth.confirm-password');
    }

    public function confirmPassword(Request $request)
    {
        $request->validate([
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => Auth::user()->email, 'password' => $request->password])) {
            return redirect()->route('password.change');
        }

        return back()->withErrors(['password' => 'Password confirmation failed.']);
    }
}
