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
    public function allUser()
    {
        return view('Admin.allUser');
    }
    public function storeUser(Request $request)
    {
        // Verifica se o usuário está autenticado e tem a função 'admin'
        if (Auth::check() && Auth::user()->hasRole('admin')) {
            // Validação dos dados do formulário
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'surname' => 'required|string|max:255',
                'userType' => 'required|string',
                'password' => 'required|string|min:8',
            ]);

            // Criação do usuário
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'surname' => $request->surname,
                'User_type' => $request->input('userType'), // Corrigindo aqui
                'password' => Hash::make($request->password),
            ]);

            // Atribuição da função (role) com base no tipo de usuário selecionado
            switch ($request->input('User_type')) { // Corrigindo aqui
                case 'Attendant':
                    $role = 'attendant';
                    $successMessage = 'O usuário atendente foi adicionado com sucesso!';
                    break;
                case 'Stock_manager':
                    $role = 'stock_manager';
                    $successMessage = 'O usuário gestor de estoque foi adicionado com sucesso!';
                    break;
                case 'Accountant':
                    $role = 'accountant';
                    $successMessage = 'O usuário contabilista foi adicionado com sucesso!';
                    break;
                default:
                    $role = null;
                    break;
            }

            if ($role) {
                $user->attachRole($role); // Atribui a função (role) ao usuário
                Alert::success('Adicionado', $successMessage);
            } else {
                Alert::error('Erro', 'Tipo de usuário inválido!');
            }

            return redirect()->back();
        } else {
            return redirect()->route('login')->with('error', 'Você não tem permissão para acessar esta funcionalidade!');
        }
    }
    public function updateUser($id)
    {

    }
    public function deleteUser($id)
    {
        
    }
}
