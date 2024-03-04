<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Libro;
class ControladorLibros extends Controller{

    public function inicio(){
        return view('welcome');
    }

    public function mostrarLibros(){
        $libros= Libro::all();
        return view('libros',@compact('libros'));
    }
}
