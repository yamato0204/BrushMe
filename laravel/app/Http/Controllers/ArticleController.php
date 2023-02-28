<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        #チーム別の記事一覧を表示
        #チームのid（team_id）を取得
        $team=Team::findOrFail($id)->id;
    
    //チームidが１の時のarticle
        $articles=Article::whereTeam_id($team)->get();

        $article=Article::whereTeam_id($team)->first();

        if(!isset($article)){
            return view('article.article', compact('team'));
        }
    
       
        
        return view('article.article', compact('articles','team'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //記事投稿画面表示
        $team=Team::findOrFail($id)->id;
       

       
       
        return view('article.create',compact('team'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $team=Team::findOrFail($id)->id;
        //記事　保存処理
        //参加条件ー＞記事投稿
        //記事投稿したら、userテーブルのflag +1


        Article::create([

            'body' => $request->body,
            'team_id' => $team,
            'user_id' => Auth::id()
           ]);

        return redirect()->route('article.index', ['team' => $team] );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
