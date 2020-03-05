<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    //
}
$mission = new App\Mission();
$mission->code = '1234';
$mission->title = 'First Test Mission';
$mission->operator = "Test Operator";
$mission->save();
