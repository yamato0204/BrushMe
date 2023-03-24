<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/*use App\Models\Team;
use App\Models\User;
use App\Models\Like;*/

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'team_id',
        'user_id',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->belongsToMany(User::class,'likes')->withTimestamps();
    }

    public function isLikedBy(?User $user):bool
    {
        return $user
        ? (bool)$this->likes->where('id',$user->id)->count()
        :false;
    }


    public function getCountLikesAttribute():int
    {
        return $this->likes->count();
    }

    //ArticleVue <div> 必須

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
