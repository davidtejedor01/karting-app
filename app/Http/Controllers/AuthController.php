<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    //Si ya estás logueado te manda al CRUD, sino te muestra el login
    public function showLoginForm()
    {
        // Si ya está logueado, mandalo al CRUD directamente
        if (Auth::check())
            return redirect()->route('materias.index');

        return view('welcome');
    }

    public function login(Request $request)
    {
        // Validación de los inputs
        $credentials = $request->validate(['email' => ['required', 'email'], 'password' => ['required'],]);


        if (Auth::attempt($credentials)) { // intento de autenticación
            $request->session()->regenerate();  // Regeneración de la sesión para evitar fijación de sesión
            return redirect()->route('materias.index'); // redirección al CRUD
        }

        return back()->withErrors(['email' => 'Credenciales incorrectas.',])->onlyInput('email'); // Si falla, muestra el error
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Cierra la sesión del usuario
        $request->session()->invalidate(); // Invalida la sesión actual
        $request->session()->regenerateToken(); // Regenera el token CSRF
        return redirect()->route('login'); // redirección al login
    }
}
