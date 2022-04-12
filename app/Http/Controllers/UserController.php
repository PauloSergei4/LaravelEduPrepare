<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(){
        $title = 'Реєстрація користувача';
        return view('admin.user.create', compact('title'));

    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed',
            'avatar'=>'nullable|image',
        ]);

        if($request->hasFile('avatar')){
            $folder = date('Y-m-d');
            $avatar = $request->file('avatar')->store("images/{$folder}");
        }

       $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
           'avatar'=>$avatar ?? null,

        ]);
        session()->flash('success','Реєстрація успішна');
        Auth::login($user);
        if ('is_admin'==1) {
            return redirect()->Route('admin.home');
        }
        return redirect()->Route('home');
    }


    public function loginForm()
    {
        $title = 'Форма авторизації';
        return view('admin.user.login', compact('title'));
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);


        if(Auth::attempt([
            'email'=> $request->email,
            'password'=>$request->password
        ])){
            return redirect()->Route('admin.home');
        }

        return redirect()->back()->with('error', 'Невірний логін або пароль');

    }

    public function logout()
    {
        Auth::logout();
        return redirect()->Route('loginForm');
    }
}
