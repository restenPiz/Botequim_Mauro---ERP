<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    //?Inicio dos metodos de controlador
    public function addUser()
    {
        return view('Admin.addUser');
    }
    public function allUser()
    {
        return view('Admin.allUser');
    }
    public function updateUser($id)
    {

    }
    public function deleteUser($id)
    {
        
    }
}
