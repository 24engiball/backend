<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectMember extends Model
{
    protected $table = 'project_member';

    public function find_project()
    {
        return $this->hasOne('App\Project','id', 'project_id');
    }

    public function find_member_info()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }
}
