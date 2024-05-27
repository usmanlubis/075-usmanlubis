<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $user = User::where("email", $request->email)->first();

        if ($user == null){
            return redirect()->back()->with("error", "User not found");
        }

        if (!Hash::check($request->password, $user->password)){
            return redirect()->back()->with("error", "Wrong password");
        }

        $request->session()->regenerate();
        $request->session()->put("isLogged", true);
        $request->session()->put("id", $user->id);
        $request->session()->put("name", $user->name);
        $request->session()->put("email", $user->email);
        $request->session()->put("phone", $user->phone);
        $request->session()->put("role_id", $user->role_id);

        return redirect()->route('homepage');
    }

    public function signupPage()
    {
        return view('signup');
    }

    public function logout(Request $request)
    {
        session()->flush();

        return redirect()->route('login-page');
    }
}
