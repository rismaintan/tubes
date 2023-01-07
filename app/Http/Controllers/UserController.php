<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{   

    public function preregister()
    {
        return view('registrasi-risma');
    }

    public function register(Request $input)
    {
        $input->validate([
            'nama' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'repassword' => 'required|same:password',
        ]);

        $user = new User([
            'name' => $input->nama, 
            'email' => $input->email,
            'password' => Hash::make($input->password),
        ]);
        $user->save();

        return redirect()->route('prelogin');
    }

    public function prelogin()
    {
        return view('login-risma');
    }

    public function login(Request $input)
    {
        $input->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $input->email, 'password' => $input->password])) {
            $input->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'password' => 'Wrong email or password',
        ]);
    }

    public function preprofile()
    {
        return view('profil-risma');
    }

    public function profile(Request $input)
    {  
        $input->validate([
            'nama' => 'required',
            'password_baru' => 'required|confirmed',
        ]);
        $user = User::find(Auth::id());
        $user->name = $input->nama;
        $user->password = Hash::make($input->password_baru);
        $user->save();
        $input->session()->regenerate();
        return back();
    }

    public function logout(Request $input)
    {
        Auth::logout();
        $input->session()->invalidate();
        $input->session()->regenerateToken();
        return redirect('/');
    }
}
