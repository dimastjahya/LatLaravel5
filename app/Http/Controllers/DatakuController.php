<?php
namespace App\Http\Controllers;

class DatakuController extends Controller
{
 	public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }
	public function rumah()
    {
         return view('rumah');
    }
}