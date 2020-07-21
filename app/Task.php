<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $fillable = [
        'task', 'completed',
    ];

    // USER MAY HAVE MANY TASKS
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
