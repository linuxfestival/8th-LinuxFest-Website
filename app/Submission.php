<?php

namespace App;


class Submission extends \Moloquent
{

    protected $fillable = [
        'attendance',
        'subject',
        'abstract',
        'description'
    ];
}
