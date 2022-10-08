<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    protected $table = 'beers';

    protected $primaryKey = 'id';

    protected $fillable =['name','type','unitprice','country'];
}
