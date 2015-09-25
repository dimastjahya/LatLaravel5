<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index()
    {
    	$data['nama'] = "Diego Teejay";
    	$data['email'] = "dimastjahya@gmail.com"; 
    	return view('profile')->with('data', $data);
    }

     public function materi()
    {
    	return view('Materi');
    }
}
