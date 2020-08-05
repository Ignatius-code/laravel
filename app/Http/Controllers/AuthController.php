<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class AuthController extends Controller
{
    public function register(){
    	return view('/register');
    }

    public function welcome(Request $request){
    	$first = $request->input('first');
    	$last = $request->input('last');
    	return view('/welcome')-> with('first', $first)
    	-> with('last', $last); 
    }
}