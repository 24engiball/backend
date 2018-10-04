<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use App\Project;
use Auth;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function find_owner_project()
    {
        return $this->hasMany('App\Project', 'owner_id', 'id');
    }

    public function find_manager_project()
    {
        return $this->hasMany('App\Project', 'manager_id', 'id');
    }

    public function find_my_project()
    {
        return $this->hasMany('App\ProjectMember','user_id','id')->with('find_project');
    }
}
