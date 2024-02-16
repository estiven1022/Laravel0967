<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cursocontroller extends Controller
{
    public function hola($num1,$num2){



        return $num1+$num2;
    
       }
}
