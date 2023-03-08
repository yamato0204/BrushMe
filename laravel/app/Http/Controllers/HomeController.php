<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\UserTeamService;

class HomeController extends Controller
{
/**
 * ホーム画面表示
 * 
 * 
 */

 public function __construct()
 {
     $this->middleware(function ($request, $next) {

         
         $id = $request->route()->originalParameters();
         $id = $id['user'] ?? null;
         
     
         //$article_userId=$request->user()->id;
          //articleのid取得
         if(!is_null($id)){
             
             $UserId = (int)$id;
             $userId = Auth::id(); //userテーブルのid
             if($UserId !== $userId){
                 abort(404);
             }
        } 

         return $next($request);
     });
 }



    public function index(){

        $teams=UserTeamService::GetUserTeam();
        return  view('home', compact('teams'));
    }

    public function edit(){
        $user_id = Auth::id();
        

        return view('user.edit',compact('user_id'));
    }


    public function update($id){
        return view('testtest',compact('id'));

    }

   

}
