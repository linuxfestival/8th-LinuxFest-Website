<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Route;

class LandingController extends Controller
{

    public static function routes()
    {
        Route::get('/', 'LandingController@index')->name('landing::index');
    }

    public static function index() {
        
        
        
        return view('landing.index');
    }
}
