<?php

namespace App;


/**
 * Class Submission
 *
 * @property array attendance
 * @property string subject
 * @property string abstract
 * @property string description
 * @property string resume
 * @property string abstract_file
 *
 * @package App
 */
class Submission extends \Moloquent
{

    protected $fillable = [
        'attendance_name',
        'attendance_phone',
        'attendance_email',
        'subject',
        'abstract',
        'description',
    ];
}
