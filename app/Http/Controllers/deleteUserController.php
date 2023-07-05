<?php

namespace App\Http\Controllers;

use App\articles;
use App\User;
use Illuminate\Http\Request;

class deleteUserController extends Controller
{
    public function deleteUser($id)
    {
        if(auth()->user()->role == 'Admin'){
            $user = User::find();
            $user->delete();
            $articles = articles::where('user_id', '=', $id);
            $articles->delete();
        }
        $user = User::all();

        return view('home.deleteUser', ['user'=>$user]);
    }

    public function viewDelete(){

        $user = User::all();

        return view('home.deleteUser', ['user'=>$user]);
    }
}
