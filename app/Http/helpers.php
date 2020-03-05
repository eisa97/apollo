<?php

function add_mission_record()
{
    $mission = new \App\Mission();
    $mission->code = '1234';
    $mission->title = 'First Test Mission';
    $mission->operator = "Test Operator";
    $mission->save();
}
