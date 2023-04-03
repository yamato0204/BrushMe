<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use InterventionImage;
use App\Http\Requests\UploadImageRequest;
use App\Models\TeamUser;
use App\Models\User;
use App\Services\ImageService;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Echo_;
use Illuminate\Support\Facades\DB;
use Symfony\Component\CssSelector\Node\ElementNode;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $keyword = $request->input('keyword');

        $query = Team::query();

        if(!empty($keyword)){
            $query->where('name', 'LIKE', "%{$keyword}%")
            ->orWhere('information', 'LIKE' , "%{$keyword}%");
        }

        $teams = $query->latest()->get();




        $ranks = Team::withCount(['teamUser','users' => function (Builder $query){
            $query->where('is_member',1);
         }])->orderBy('users_count','desc')->limit(5)->get();

    //  foreach($teams as $team){
    //    echo $team->name;
    //  }







        return view('team.team',compact('teams','keyword','ranks'));


    
        //
    }


    public function article($id)
    {
        #チーム別の記事一覧を表示
        #チームのid（team_id）を取得
        $team = Team::findOrFail($id);

        $team_id=$team->id;

    //チームidが１の時のarticle
        $articles=Article::whereTeam_id($team_id)->get();

        $article=Article::whereTeam_id($team_id)->first();

        $val = $team->teamUser()->where('user_id',Auth::id())->where('is_member',true)->first();

        $member = !is_null($val);

        $users_count = $team->teamUser()->where('is_member',true)->count();

        $users = $team->teamUser()->where('is_member',true)->limit(2)->get();
       
        
        if($users_count > 2)
        {
            $count = $users_count - 2; 
            return view('article.article', compact('articles','team','users','count','member'));

        }

        if(!isset($article) && $users_count > 2){
            return view('article.article', compact('team','users','count','member'));
        }

       // limit(1)->get();
        
        return view('article.article', compact('articles','team','users','member'));
       
    }



    public function member($id)
    {

        $team = Team::findOrFail($id);

        $users = $team->teamUser()->where('is_member',true)->get();

        return view('team.member', compact('team','users'));
    }










   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //チーム作成画面表示
    





       




        return view('team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UploadImageRequest $request)
    {
        //チーム作成　保存処理
        // バリデーションメッセージ
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'information' => ['required', 'string', 'max:1000'],
            
        ]);


        $imageFile = $request->image;
        if(!is_null($imageFile) && $imageFile->isValid() ){
          
            $fileNameToStore = ImageService::upload($imageFile, 'teams');
               
            Team::create([

                'name' => $request->name,
                'information' => $request->information,
                'filename' => $fileNameToStore
               ]);
        
       }

       return redirect()->route('team');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public static function join(Request $request ,Team $team)
    {
        //Teamモデルに処理をかく
       
        $is_true= ['is_member' => true]; 

        $is_false= ['is_member' => false]; 

        $team->users()->detach($request->user()->id,$is_false);
        $team->users()->attach($request->user()->id, $is_true);
        //または 
        
        return [
            'is_member' => true,
        ];
    }

    public function exit(Request $request, Team $team)
    {

       // $is_member= ['is_member' => false];
       // $team=$team->users->where('user_id',$request->user()->id)->first();
        //$team->isMember = false;
        $is_false= ['is_member' => false]; 


       $team->users()->syncWithPivotValues($request->user()->id, $is_false, false);
       
       
        
     
        return[
            'is_member' => false,
        ];
    }



   





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
