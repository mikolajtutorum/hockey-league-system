<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfers extends Model
{
    protected $table = 'transfers';
    protected $primaryKey = 'id';

    protected $dates = ['time'];
}
