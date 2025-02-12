<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //regras de negócio
    //variaveis e conteudos para ir para a view
    public function index(){
        $users = User::all();
        return view('users.index', [
            'greeting' => 'Hello World!',
            'users' => $users
        ]);
    }

    public function show(User $user){
        return view('users.show',[
          'user' => $user
        ]);
    }
}
