<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    //*Inicio dos metodos de exibicao e edicao dos dados do perfil
    public function updateProfile($id)
    {
        $user=User::findOrFail($id);

        return view('userProfile',compact('user'));
    }

    public function storeProfile(Request $request, $id)
    {
        $validator = Validator::make(Request::all(), [
            'name' => 'required|string|max:255',
            'Surname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'required|string|min:8|confirmed',
        ]);

        //*Inicio do metodo responsavel por redirecionar com o erro
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator, 'updateUser')
                ->withInput($request->all())
                ->with(['modal_id' => $id]);
        }

        $user = User::findOrFail($id);
        $user->name = Request::input('name');
        $user->Surname = Request::input('Surname');
        $user->email = Request::input('email');

        if (Request::filled('password')) {
            $user->password = bcrypt(Request::input('password'));
        }

        $user->save();

        Alert::success('Actualizado','Os dados do usuario foram actualizados com sucesso!');

        return redirect()->back();
    }

    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
