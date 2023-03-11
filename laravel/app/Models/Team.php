<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'information',
        'filename',
    ];

    protected $casts = [
        'is_member' => 'boolean',
    ];


    public function isMember(){
        return $this->belongsToMany(User::class,'team_user')
        ->withPivot('is_member');
    }


    public function users(){
        return $this->belongsToMany(User::class,'team_user')->withTimestamps();
    }

    public function isJoinBy(User $user)
    {
        
            
       // $val = DB::table('team_user')->where('is_member', true);
        //$this->users->where('id',$user->id) and DB::table('team_user')->where('is_member', true);
        (bool)$val = DB::table('team_user')->where('is_member', true)->first();
        if((bool)$val){
            return true;
        }  else{
            return false;
        }
        //:initial-is-member-by = {{Illuminate\Support\Js::from($team->isJoin(Auth::user()))}} 
           
    }
    
}
