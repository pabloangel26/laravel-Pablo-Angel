<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    // Muestra el formulario de contacto
    public function showForm()
    {
        return view('contacto'); // Asegúrate de que el archivo 'contacto.blade.php' esté en 'resources/views'
    }

    // Guarda los datos del formulario de contacto
    public function store(Request $request)
    {
        // Validación de datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'asunto' => 'required|string|max:255',
            'email' => 'required|email',
            'texto' => 'required|string',
        ]);

        // Crear una nueva entrada en la base de datos
        Contact::create($request->all());

        // Redirigir con un mensaje de éxito
        return redirect()->route('contact.form')->with('success_message', 'Tu mensaje ha sido enviado exitosamente.');
    }
}
