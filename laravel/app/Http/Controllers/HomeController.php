<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\UserTeamService;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use InterventionImage;
use App\Http\Requests\UploadImageRequest;
use App\Services\ImageService;


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

        $user = User::where('id', Auth::id())->first();
        $user_id=$user->id;
        $teams= $user->teamUser()->where('is_member',true)->get();

        return  view('home', compact('teams','user'));
    }

    public function edit(){
        $user_id = Auth::id();
        

        return view('user.edit',compact('user_id'));
    }


    public function update(UploadImageRequest $request, $id ){
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'self_introduction' => ['required', 'string', 'max:1000'],
            
        ]);


        $imageFile = $request->image;
        if(!is_null($imageFile) && $imageFile->isValid() ){
          
            $fileNameToStore = ImageService::upload($imageFile, 'avatars');
        }
               
            $avatar = User::findOrFail($id);
            $avatar->name = $request->name;
            $avatar->self_introduction = $request->self_introduction;

            if(!is_null($imageFile) && $imageFile->isValid() ){
                $avatar->filename = $fileNameToStore;
            }
    
            $avatar->save();
      
        
       

       return redirect()->route('home');

    }


    public function goal(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->goal = $request->goal;
        $user->save();

        return redirect()
            ->route('home');
    }

   

}
