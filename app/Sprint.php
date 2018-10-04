<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
    protected $table = 'sprint';
    public function find_task()
    {
        return $this->hasMany('App\Task','sprint_id','id');
    }

    public function find_project()
    {
        return $this->hasOne('App\Project', 'id', 'project_id');
    }
}
