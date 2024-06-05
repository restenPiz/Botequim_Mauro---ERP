<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    //?Inicio dos metodos de controlador
    public function addUser()
    {
        $users=DB::table('users')
            ->where('id','>','1')
            ->where('user_type','Attendant')
            ->get();

        return view('Admin.addUser',compact('users'));
    }
    public function addStockManager()
    {
        $users=DB::table('users')
            ->where('id','>','1')
            ->where('user_type','Stock_manager')
            ->get();

        return view('Admin.addStockManager',compact('users'));
    }
    public function addAcountant()
    {
        $users=DB::table('users')
            ->where('id','>','1')
            ->where('user_type','Accountant')
            ->get();

        return view('Admin.addAcountant',compact('users'));
    }
    public function storeUser(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'Surname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        
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
            'Surname' => $request->Surname,
            'user_type' => $request->user_type, 
            'password' => Hash::make($request->password),
        ]);

        $user->addRole($role); 
        Alert::success('Adicionado', $successMessage);
    
        return redirect()->back();
    }
    public function updateUser($id)
    {
        Request::validate([
            'name' => 'required|string|max:255',
            'Surname' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if (Request::input('user_type') === 'Attendant') {
            $role = 'attendant';
            $successMessage = 'O usuário atendente foi adicionado com sucesso!';
        } elseif (Request::input('user_type') === 'Stock_manager') {
            $role = 'stock_manager';
            $successMessage = 'O usuário gestor de estoque foi adicionado com sucesso!';
        } elseif (Request::input('user_type') === 'Accountant') {
            $role = 'accountant';
            $successMessage = 'O usuário contabilista foi adicionado com sucesso!';
        } else {
            $role = null;
        }

        $user = User::find($id);
        
       //?Metodo de insercao
        $user = Request::input('name');
        $user= Request::input('email');
        $user = Request::input('Surname');
        $user = Request::input('user_type'); 
        $user= Hash::make(Request::input('password'));
        $user = Request::input('id');
    
        $user->save();

        Alert::success('Actualizado', $successMessage);
    
        return redirect()->back();
    }
    //?Inicio do metodo para eliminar os usuarios
    public function deleteUser($id)
    {
        $user = User::find($id);

        $user->delete();

        Alert::success('Eliminado!','O usuario foi eliminado com sucesso!');

        return back();
    }
}
