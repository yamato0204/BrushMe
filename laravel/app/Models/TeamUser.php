<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;


class TeamUser extends Pivot

{

    protected $fillable = [
        'team_id',
        'user_id',
        'is_member',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }





}


?>