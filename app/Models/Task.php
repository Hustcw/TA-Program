<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Task extends Model
{
    //
    protected $fillable = [
      'title','content',
    ];

    public function users()
    {
        return $this->belongsToMany(User::Class,'task_user','task_id','user_id');
    }//用户和任务多对多
}
