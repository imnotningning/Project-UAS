<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class createArticleController extends Controller
{
    public function create(Request $request){
        $this->validate($request,[
            'title' => 'required|min:1',
            'category' => 'required|string|max:255',
            'photo' => 'required',
            'story' => 'required'
        ]);

        DB::table('articles')->insert([
        'user_id' => Auth::user()->id,
        'category_id' => $request->category,
        'title' => $request->title,
        'description' => $request->story,
        'image' => $request->photo,
        ]);

        return redirect('/createArticle');
    }

    public function createView(){
        return view('home.createArticle');
    }
}
