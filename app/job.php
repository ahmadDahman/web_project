<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    //
    protected $fillable = [
         'title', 'company_name' ,'category','address','street','city','requirements','salary', 'description'
    ];
}
