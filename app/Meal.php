<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    // The following could be used to manually override default settings of the schema creation. For example, to change (protect) a table name or set a primary key field explicitly.

//    // Table Name
//    protected $table = 'meals';
//    // Primary Key
//    public $primaryKey = 'id';
//    // Timestamps
//    public $timestamps = true;

    public function user() {
        return $this ->belongsTo('App\User');
    }

    public function foods() {
        return $this->hasMany('App\Food');
    }

}
