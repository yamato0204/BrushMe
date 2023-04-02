<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use App\Models\Comment;


class CommentController extends Controller
{
    public function comment(Request $request, $id)
    {

       


       

        Comment::create([

            'comment' => $request->comment,
            'article_id' => $id,
            'user_id' => Auth::id()
           ]);

        return redirect()->route('article.show', ['article' => $id] );
    }

    
}

