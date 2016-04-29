<?php

namespace App\Http\Controllers;

use App\Presenter;
use App\Section;
use App\Workshop;
use Illuminate\Support\Facades\Route;

class SiteController extends Controller
{

    public static function routes()
    {
        Route::get('/', 'SiteController@index')->name('landing::index');
    }


    public function index()
    {
        $presenters = Presenter::all();
        $sections = Section::all();
        return view('landing.index', ['presenters' => $presenters, 'workshops' => $sections]);
    }

}
