<?php 
namespace App\Services;

use Illuminate\Support\Facades\Auth;
use App\Models\Team;

class UserTeamService
{

    public static function GetUserTeam(){


         #チーム別の記事一覧を表示
        #チームのid（team_id）を取得
        $user = Auth::id();
        
    
    //チームidが１の時のarticle
        $teams=Team::find($user)->get();
        return $teams;

       // $team=Article::whereUser_id($user)->first();

     //   if(!isset($team)){
     //       return view('article.article', compact('team'));
     //   }
    
       
        
       
        

    }
    
}









?>