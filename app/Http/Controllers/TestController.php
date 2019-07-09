<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function welcome(){
    	$a = 4;
    	$b = 10;
    	$c = $a + $b;

    	return"El valor de $c es ".$c;
    }
}
