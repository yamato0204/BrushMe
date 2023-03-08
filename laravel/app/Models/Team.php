<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
        ->as('is_member')
        ->withPivot('is_member');
    }


    public function users(){
        return $this->belongsToMany(User::class,'team_user');
    }

    public function isJoin(?User $user):bool
    {
        return $user
            ?(bool)$this->users->where('id',$user->id)->count()
            and (bool)$this->where('is_member', true)
            :false;
    }
}
