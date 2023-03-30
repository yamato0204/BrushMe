<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Team;
use App\Models\TeamUser;
use CreateCommentsTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */





     
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //記事投稿画面表示
        



        $team_id=Team::findOrFail($id)->id;


       $team=TeamUser::where('user_id',Auth::id())->where('team_id',$team_id)->first();

       $val = $team ? $team->is_member : false;

       
      

       //本番
      // (bool)$val = $team->isMember()->where('user_id', Auth::id())
      // ->first()->getOriginal()['pivot_is_member'];
    
       
/*

       (bool)$val = DB::table('team_user')->where('user_id',$user_id)
       ->where('team_id', $team)
       ->first();
    */

    
    if($val){
        return view('article.create',compact('team_id'));
    }else{
        return abort('404' , 'Cannot follow yourself');
    }
    


     

   





    
       

    
        




       

       
       
      
        
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
    
    $article=Article::findOrFail($id);
       

       $comments = $article->comments()
       ->orderBy('created_at', 'desc')
            ->paginate(5);

       

       /*
       $user = User::where('name', $name)->first();
       $user_id=$user->id;
       $teams= $user->teamUser()->where('is_member',true)->get();
*/
       
       

       // $comment = $article->comment();

        return view('article.show', compact('article','comments'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $article_id) //article id
    {



        $id = $request->route()->originalParameters();
        
        $id = $id['article'] ?? null;
        
        
   
        //$article_userId=$request->user()->id;
         //articleのid取得
        if(!is_null($id)){

           $article = Article::find($id);
           $user_id = $article->user_id;
           
            $userId = Auth::id(); //userテーブルのid
            
            if($user_id !== $userId){
                abort(404);
            }
       } 


       $article=Article::findOrFail($article_id);
       

        $team_id = $article->team()->first()->id;
        
        
        
        return view('article.edit',compact('team_id','article'));
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

    public function like(Request $request, Article $article)
    {
        $article->likes()->detach($request->user()->id);
        $article->likes()->attach($request->user()->id);

        return [
            'id' => $article->id,
            'countLikes' => $article->count_likes,
        ];
    }


    public function unlike(Request $request, Article $article)
    {
        $article->likes()->detach($request->user()->id);

        return [
            'id' => $article->id,
            'countLikes' => $article->count_likes,
        ];
    }
}
