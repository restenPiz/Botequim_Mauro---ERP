<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Validator;
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
    public function updateUser(Request $request, $id)
    {
        $validator = Validator::make(Request::all(), [
            'Name' => 'string|max:255',
            'Surname' => 'string|max:255',
            'Email' => 'email|unique:users,email,' . $id,
            'Password' => 'string|min:8|confirmed',
            'Password_confirmation' => 'string|min:8|confirmed',
        ]);

        //*Inicio do metodo responsavel por redirecionar com o erro
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput()
                ->with(['id' => $id]);
        }

        $user = User::findOrFail($id);
        $user->name = Request::input('name');
        $user->Surname = Request::input('Surname');
        $user->email = Request::input('email');

        if ($request->filled('password')) {
            $user->password = bcrypt(Request::input('password'));
        }

        $user->save();

        return redirect()->back()->with('success', 'Usuario actualizado com sucesso!');
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
