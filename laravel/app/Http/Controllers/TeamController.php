<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use InterventionImage;
use App\Http\Requests\UploadImageRequest;
use App\Services\ImageService;

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

        return view('team.team',compact('teams','keyword'));


    
        //
    }


    public function article($id)
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
