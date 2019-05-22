<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Student extends Model
{
	protected $table = 'student';

	protected $fillable = [
        'email','name', 'password','classroom_id',
    ];
    //

    public function classroom()

   {

       return $this->hasOne('App\Classroom', 'id', 'classroom_id');

   }
}
