<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

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
    public function storeUser(Request $request)
    {
        if(Auth::user()->hasRole('admin'))
        {
            if(Request::input('User_type') == 'Attendant')
            {
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'surname' => $request->surname,
                    'User_type' => $request->userType,
                    'password' => Hash::make($request->password),
                ]);
    
                //*Atribuindo a role para o pastor quando for adicionado
                $user->attachRole('attendant');
    
                Alert::success('Adicionado', 'O usuario atendente foi adicionado com sucesso!');
    
                return redirect()->back();
            }
        }
        else
        {
            return redirect()->route('login');
        }
    }
    public function updateUser($id)
    {

    }
    public function deleteUser($id)
    {
        
    }
}
