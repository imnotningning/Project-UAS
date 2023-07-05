<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function profile(Request $request){
        $this->validate($request,[
            'name' => 'required|min:2',
            'email' => 'required|email|string|max:255',
            'phone' => 'required|min:12|max:15'
        ]);

        DB::table('users')->where('id',Auth::user()->id)->update([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone
        ]);

        return redirect('/profile');
    }
}
