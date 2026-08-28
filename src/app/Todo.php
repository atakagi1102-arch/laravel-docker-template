<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todos';//追加
    
    protected $fillable = [
        'content',
    ];


}
