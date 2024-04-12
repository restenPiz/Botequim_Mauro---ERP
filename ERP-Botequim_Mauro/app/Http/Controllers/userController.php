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
        $users=User::all();

        return view('Admin.addUser',compact('users'));
    }
    public function storeUser(Request $request)
    {
        //?Inicio da condicao
        if ($request->input('user_type') === 'Attendant') {
            $role = 'attendant';
            $successMessage = 'O usuário atendente foi adicionado com sucesso!';
        } elseif ($request->input('user_type') === 'Stock_manager') {
            $role = 'stock_manager';
            $successMessage = 'O usuário gestor de estoque foi adicionado com sucesso!';
        } elseif ($request->input('user_type') === 'Accountant') {
            $role = 'accountant';
            $successMessage = 'O usuário contabilista foi adicionado com sucesso!';
        } else {
            $role = null;
        }

        //?Metodo de insercao
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'Surname' => $request->surname,
            'user_type' => $request->user_type, 
            'password' => Hash::make($request->password),
        ]);

        $user->addRole($role); 
        Alert::success('Adicionado', $successMessage);
    
        return redirect()->back();
    }
    public function updateUser($id)
    {

    }
    public function deleteUser($id)
    {
        
    }
}
