<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixtures extends Model
{
    protected $table = 'fixtures';
    protected $primaryKey = 'fixture_id';

    protected $dates = ['scheduled_time'];
}
