<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //?Inicio dos metodos de controlador
    public function addUser()
    {
        return view('Main.Admin.addUser');
    }
    public function allUser()
    {
        return view('Main.Admin.allUser');
    }
    public function updateUser()
    {

    }
    public function deleteUser()
    {
        
    }
}
