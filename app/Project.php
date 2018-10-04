<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';
    public function find_project_member()
    {
        return $this->hasOne('App\ProjectMember','project_id', 'id');
    }

    public function find_sprint()
    {
        return $this->hasMany('App\Sprint','sprint_id' ,'id');
    }
}
