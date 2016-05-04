<?php

namespace App\Http\Controllers;

use App\Presenter;
use App\Section;
use App\Sponsor;
use App\Workshop;
use Illuminate\Support\Facades\Route;

class SiteController extends Controller
{

    public static function routes()
    {
        // Landing page
        Route::get('/', 'SiteController@landing')->name('app::home');

        // Presenters
        Route::get('/presenter/{presenter}', 'SiteController@presenter')->name('app::presenter');

        // Timeline
        Route::get('/timeline','SiteController@timeline');

        // Registeration
        Route::get('/register','SiteController@register');

        // Sections
        // TODO: handle 2016 in a better way:D
        Route::get('/2016/{section}', 'SiteController@section')->name('app::section');

    }


    public function landing()
    {
        $presenters = Presenter::all();
        $sections = Section::all();
        $sponsors = Sponsor::all();
        
        return view('landing.landing', [
            'presenters' => $presenters,
            'sections' => $sections,
            'sponsors' => $sponsors,
        ]);

    }

    public function timeline () {
        $sections = Section::all();
        return view('timeline.timeline', ['sections' => $sections]);
    }

    public function presenter(Presenter $presenter)
    {
        return view('presenter.presenter', [
            'presenter' => $presenter,
        ]);
    }

    public function section(Section $section)
    {
        $presenter = Presenter::where('id',$section->presenter)->firstOrFail();

        return view('section.section', [
            'section' => $section,
            'presenter' => $presenter,
        ]);
    }

    public function register() {
        return view('register.register');
    }

}
