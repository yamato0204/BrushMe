<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function teams()
    {
        return $this->belongsToMany(Team::class,'team_user');
    }

    public function isMember(){
        return $this->belongsToMany(Team::class,'team_user')
        ->as('is_member')
        ->withPivot('is_member');
    }


    public function followers()
    {
        return $this->belongsToMany(User::class,'follows', 'followee_id', 'follower_id')->withTimestamps();
    }

    public function followings()
    {
        return $this->belongsToMany(User::class,'follows', 'follower_id', 'followee_id')->withTimestamps();
    }
   

    public function isFollowedBy(?User $user):bool
    {
        return $user
            ?(bool)$this->followers->where('id',$user->id)->count()
            :false;
    }

    public function getCountFollowersAttribute()
    {
        return $this->followers->count();
    }

    public function getCountFollowingsAttribute()
    {
        return $this->followings->count();
    }


    
}
