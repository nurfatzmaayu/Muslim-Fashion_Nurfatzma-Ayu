<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert as FacadesAlert;

class ProfileController extends Controller
{
    public function index(User $user)
    {
        return view('profile.index', [
            "profile" => $user
        ]);
    }

    public function update(Request $request, User $user) {
        $rules = [
            "name" => "required",
        ];

        if ($request->address) {
            $rules['address'] = "required";
        }
        if ($request->phone) {
            $rules['phone'] = "required";
        }

        if ($user->email != $request->email) {
            $rules['email'] = "required|email:dns|unique:users";
            $rules['email'] = $request->email;
        }


        if ($request->password) {
            $rules['password'] = "min:8|confirmed";
        }

        $dataUser = $request->validate($rules);

        $dataUser['password'] = Hash::make($request->password);

        User::where('id', $user->id)->update($dataUser);

        Facadesalert::success('success', "Profile berhasil diubah!");

        return redirect('profile/' . $user->id);
    }
}
