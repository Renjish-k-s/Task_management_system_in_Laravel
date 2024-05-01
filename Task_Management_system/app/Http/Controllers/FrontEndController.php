<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User; 
use App\Http\Controllers\Controller;
use App\Http\Controllers\FrontEndController;


class FrontEndController extends Controller
{
    public function home(){

        return view('welcome');
    }

    public function validateuser()
    {
        return view('login.validateuser');
    }

    public function createuser()
    {
        return view('login.user_creation');
    }
}
