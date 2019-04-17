<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    //
    protected $table = 'todos';

    protected $fillable = [ 'created_by',];

//    public $timestamps = false;

    public function todos(){
        return $this->hasMany('App\Todo','user_id');
    }
}
