<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TaskMember extends Model
{
    protected $table = 'task_member';
    public function find_task()
    {
        return $this->hasOne('App\Task','id','task_id');
    }

    public function find_member()
    {
        return $this->hasOne('App\User','id','user_id');
    }
}
