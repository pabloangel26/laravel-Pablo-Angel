<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Mail;

// Ruta para la página 'Inicio'
Route::get('/', function () {
    return view('home');
})->name('home');

// Ruta para la página 'Nosotros'
Route::get('/nosotros', function () {
    return view('nosotros');
});

// Ruta para mostrar el formulario de contacto
Route::get('/contacto', [ContactController::class, 'showForm'])->name('contact.form');

// Ruta para manejar el envío del formulario de contacto
Route::post('/crearContacto', [ContactController::class, 'store'])->name('contact.store');

// Opcional: Rutas para listar, editar y actualizar contactos (si decides implementarlas)
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('/contacts/{id}', [ContactController::class, 'update'])->name('contacts.update');

// Ruta para la página 'Servicios'
Route::get('/servicios', function () {
    return view('servicios');
});


// Rutas de autenticación
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/forgot-password', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/reset-password/{token}', [AuthController::class, 'showResetPasswordForm'])->name('password.reset');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');


// Ruta de prueba de email
Route::get('/test-email', function () {
    Mail::raw('This is a test email', function ($message) {
        $message->to('test@example.com')->subject('Test Email');
    });

    return 'Email sent!';
});
