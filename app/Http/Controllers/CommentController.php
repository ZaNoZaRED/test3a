<?php

namespace App\Http\Controllers;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        $comment=Comment::orderBy('created_at', 'asc');
        return view('comment', data: compact('comment'));
    }
    public function create(){
        Comment::create([
            'username' => request('username'),
            'comment' => request('comment'),
        ]);
        return redirect('/');
    }
}
