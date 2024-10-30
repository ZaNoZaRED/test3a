<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(){
        $blog = Blog::orderBy('created_at', 'ASC')->get();
        return view('welcome', compact('blog'));
    }
    public function create(){
        Blog::create([
            'title' => request('title'),
            'text' => request('text'),
            'username' => request('username'),
        ]);
        return redirect('/');
    }
    public function show($id){
        $blog = Blog::orderBy('created_at', 'ASC')->
        where('id', '=', value: '1')
        ->get();
        return view('comment', compact('blog'));
    }
    

}
