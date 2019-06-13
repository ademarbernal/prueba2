<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
   public function welcome()
	{
		return view('welcome');	
	}

	public function contacto(){
		return view('contacto');
	}

	public function reviews(){
		return view('reviews');
	}
	 
  public function catalogo(){
        return view('catalogo');
   }
 }
