<?php

namespace App\Http\Controllers;

use App\articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function blog(){
        $articles = articles::where('user_id', Auth::user()->id)->get();

        return view('home.blog', [
            'articles' => $articles
        ]);
    }

    public function deleteBlog(Request $request){
        articles::where('id', $request->article)->delete();

        return redirect('/blog');
    }
}
