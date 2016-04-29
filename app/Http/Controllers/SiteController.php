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
        Route::get('/', 'SiteController@landing')->name('app::home');
        Route::get('/presenter/{presenter}', 'SiteController@presenter')->name('app::presenter');
    }


    public function landing()
    {
        $presenters = Presenter::all();
        $sections = Section::all();
        return view('landing.index', [
            'presenters' => $presenters,
            'sections' => $sections
        ]);
    }

    public function presenter(Presenter $presenter)
    {
        $p=Presenter::where('name','goo')->where('b','c')->get();
        return view('presenter', [
            'presenter' => $presenter
        ]);
    }

}
