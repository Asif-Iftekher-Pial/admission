<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
   
//    protected $guarded=[];

    protected $fillable=[

        'fname',
        'lname',
        'dateofbirth',
        'email',
        'mobile',
        'nid',
        'gender',
        'admissionclass',
        'fathername',
        'fatheroccupation',
        'fnid',
        'mothername',
        'motheroccupation',
        'mid',
        'parentscontact',
        'parentscontactsecond',
        'paddress',
        'parmanentaddress',
        'health',
        'studentpic',
        'parentpic',
        
    ];
}
