<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'task';
    public function find_sprint()
    {
        return $this->hasOne('App\Sprint','sprint_id','id');
    }

    public function find_task_member()
    {
        return $this->hasMany('App\TaskMember','task_id','id');
    }
}
