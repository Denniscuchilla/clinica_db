<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //funcion para mostrar inicio
    public function index()  
    {        
         
        return 
    view('inicio');  
  } 
  
}
