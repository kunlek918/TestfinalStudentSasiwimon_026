<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    //

    protected $table = 'student';
    protected $fillable = ['stu_code','stu_pre','stu_fname','stu_lname','major_id ','fac_id  '];

    public function facultys(){
        return $this->belongsTo(Facultys::class,'fac_id');

    }
}
