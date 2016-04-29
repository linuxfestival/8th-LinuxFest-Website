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

    public function routes()
    {
        Route::get('/', 'LandingController@index')->name('landing::index');
    }

    public function get_the_presenters(){
        $presenters = [
            'bakhshis' => [
                'name' => 'بهادر بخشی',
                'avatar' => '//media.licdn.com/mpr/mpr/shrink_200_200/p/2/000/1ae/26c/349c0fc.jpg?s=200',
                'url' => 'http://ceit.aut.ac.ir/~bakhshis/',
                'bio' => 'استادیار دانشگاه صنعتی امیرکبیر'
            ],

            'peyberah' => [
                'name' => 'امیرحسین پی‌براه',
                'avatar' => '//www.gravatar.com/avatar/95062a379d77e40f6b73093d905be817?s=200',
                'url' => 'https://www.sics.se/~amir/',
                'bio' => 'پژوهشگر در SICS'
            ],

            'nadalizadeh' => [
                'name' => 'علی نادعلی‌زاده',
                'avatar' => '//media.licdn.com/mpr/mpr/shrink_200_200/p/4/005/05c/2e6/38b0327.jpg?s=200',
                'url' => 'http://ali.nadalizadeh.ir/',
                'bio' => 'مدیر فنی تاد'
            ],

            'reza' => [
                'name' => 'رضا محمدی',
                'avatar' => '//www.gravatar.com/avatar/ba7f4236013448700d38d3a89a9cbf99?s=200',
                'url' => 'https://ir.linkedin.com/in/remohammadi',
                'bio' => 'مدیر فنی کافه‌بازار'
            ],

            'danial' => [
                'name' => 'دانیال بهزادی',
                'avatar' => '//media.licdn.com/mpr/mpr/shrink_200_200/p/2/000/19f/245/283e32f.jpg?s=200',
                'url' => 'https://danialbehzadi.wordpress.com',
                'bio' => 'گروه کاربران ایرانی اوبونتو'
            ],

            'mohajer' => [
                'name' => 'میلاد مهاجر',
                'avatar' => '//media.licdn.com/mpr/mpr/shrink_200_200/p/7/005/0a0/153/023ba11.jpg?s=200',
                'url' => 'https://ir.linkedin.com/pub/milad-mohajer/a9/a19/444',
                'bio' => 'مدیر بازرگانی رایمند'
            ],

            'peyman' => [
                'name' => 'پیمان هوشمندی',
                'avatar' => '//www.gravatar.com/avatar/31a61c55bc35852d5ad7d35ca129ce70?s=200',
                'url' => 'http://arjang.ac.ir/instructor/2',
                'bio' => 'موسسه ارژنگ'
            ],


            'faraz' => [
                'name' => 'فراز شمشیردار',
                'avatar' => '//www.gravatar.com/avatar/c4baac2a7eb2c03feb46429904f7098e?s=200',
                'url' => 'https://ir.linkedin.com/in/shamshirdar',
                'bio' => 'توسعه‌دهنده‌ی نرم‌افزارهای متن‌باز'
            ],

            'sinash' => [
                'name' => 'سینا شیخ‌الاسلامی',
                'avatar' => '//www.gravatar.com/avatar/9c773fbd22eab00f63f30a4b4a1f3a7a?s=200',
                'url' => 'http://linkedin.com/in/sinasheikholeslami',
                'bio' => 'توسعه‌دهنده‌ی نرم‌افزارهای متن‌باز'
            ],

            'mdhheydari' => [
                'name' => 'محمدحسین حیدری',
                'avatar' => '//www.gravatar.com/avatar/67a156a371ec4ffa39a37cfc4f824ee6?s=200',
                'url' => 'https://ir.linkedin.com/in/mdhheydari',
                'bio' => 'توسعه‌دهنده‌ی نرم‌افزارهای متن‌باز'
            ],


            'pooya' => [
                'name' => 'پویا پارسا',
                'avatar' => '//www.gravatar.com/avatar/1fddd58251edc7bf16e279b8811cd327?s=200',
                'url' => 'http://pi0.ir/',
                'bio' => 'توسعه‌دهنده‌ی نرم‌افزارهای متن‌باز'
            ],

            'sinal' => [
                'name' => 'سینا لباف',
                'avatar' => '//www.gravatar.com/avatar/c1be53f8f8ff2ca3fbc79b466ee023c5?s=200',
                'url' => 'https://ir.linkedin.com/pub/sina-labbaf/71/785/a86',
                'bio' => 'توسعه‌دهنده‌ی نرم‌افزارهای متن‌باز'

            ],

            'parham' => [
                'name' => 'پرهام الوانی',
                'avatar' => '//www.gravatar.com/avatar/1347add4ae303c0258a3db358ed77c55?s=200',
                'url' => 'http://1995parham.github.io/about/',
                'bio' => 'توسعه‌دهنده‌ی نرم‌افزارهای متن‌باز'
            ],

        ];
        return $presenters;
    }

    public function get_the_workshops() {
        $workshops = [

            'intro' => [
                'title' => 'Linux Intro + Intermediate',
                'presenter' => '-',
                'level' => 'شروع کار',
                'time' => 'هر دو روز - ۸ تا ۱۶',
                'room' => 'سایت کامپیوتر',
                'desc' => '
     شرکت‌کنندگان در روز اول این کارگاه با محیط سیستم عامل لینوکس، محیط‌های گرافیکی و دیگر قابلیت‌های آن آشنا می‌شوند. در روز دوم شرکت‌کنندگان با محیط ترمینال، فایل سیستم لینوکس، پردازش فایل‌های متنی، نصب برنامه‌های مختلف، مدیریت processها، کار با vim و... آشنا می‌شوند. در پایان دو روز ارائه‌ای با عنوان How to Live Happily in Linux خواهیم داشت که به شرکت‌کنندگان می‌آموزد چگونه تمام کارهای روزمره‌ی خود را در لینوکس انجام دهند، بدون این که به سیستم عامل دیگری نیاز داشته باشند.
            '
            ],

            //--------------------------------------------------------------

            'kernel' => [
                'title' => 'Linux Kernel',
                'presenter' => 'bakhshis',
                'level' => 'متوسط و پیشرفته',
                'time' => 'هر دو روز - ۸ تا ۱۴',
                'room' => 'بعدا اعلام می‌شود',
                'desc' => '
هدف از این کارگاه آشنایی بیش‌تر با هسته‌ی سیستم عامل GNU/Linux (در حقیقت خود Linux)‌ است. در این کارگاه ابتدا یک سری مفاهیم مهم کرنل مانند user-space و kernel-space توضیح داده می‌شود، س‍پس interfaceهایی که برای کار با کرنل وجود دارند توضیح داده می‌شود. در مرحله‌ی بعدی مراحل پیکربندی و نصب و راه‌اندازی یک نسخه‌ی جدید از کرنل بر روی یک سیستم را بررسی می‌کنیم. سپس وارد source code کرنل شده و با ساختار آن آشنا می‌شویم. مفهوم ماژول‌ها و مفاهیم مهم در module programming را بررسی می‌کنیم و ماژول‌های نمونه‌ای را توسعه داده و بررسی می‌کنیم.
<br>
<br>
فرض بر این است که افرادی که در این کارگاه شرکت می‌کنند دارای شرایط زیر هستند :<br>
۱- آشنایی کلی با مفاهیم سیستم‌عامل
<br>
۲- تسلط به Command Line و  Bash 
<br>
۳- آشنا به مفاهیم compile کردن با استفاده از gcc و make
<br>
۴- داشتن یک laptop که سیستم عامل لینوکسی به همراه کامپایلر‌ها در آن نصب شده باشد
<br>
۵- داشتن علاقه!!!!
            '
            ],

            //--------------------------------------------------------------

            'network' => [
                'title' => 'Networking in Linux',
                'presenter' => 'peyman',
                'level' => 'متوسط',
                'time' => 'روز اول ۸ تا ۱۴',
                'room' => 'بعدا اعلام می‌شود',
                'desc' => '
در این کارگاه شرکت‌کنندگان دستورات پایه و رفع عیب شبکه را در لینوکس می‌آموزند.
<br>
پیش‌نیاز:<br>
<ul><li>
آشنایی با TCP/IP
</li></ul>
            '
            ],

            //--------------------------------------------------------------

            'webserver' => [
                'title' => 'Webservers Powered by Linux',
                'presenter' => 'peyman',
                'level' => 'متوسط',
                'time' => 'روز دوم ۸ تا ۱۴',
                'room' => 'بعدا اعلام می‌شود',
                'desc' => '
در این کارگاه شرکت‌کنندگان یاد می‌گیرند چگونه یک وب‌سرور Apache را نصب، تنظیم و نگهداری کنند.
<br>
سرفصل های کلی این کارگاه : <br>
<ul>
<li>Apache WebServer</li>
<li>PHP/CGI</li>
<li>MYSQL Server</li>
<li>WebServer & Configuration Tips</li>
</ul>
            '
            ],


            //--------------------------------------------------------------

            'programming' => [
                'title' => 'Linux API Programming',
                'presenter' => 'faraz',
                'level' => 'متوسط و پیشرفته',
                'time' => 'روز دوم ۸ تا ۱۴',
                'room' => 'بعدا اعلام می‌شود',
                'desc' => '
در این کارگاه شرکت‌کنندگان با APIهای استاندارد لینوکس که برای زبان‌های C/C++ ساخته شده‌اند و همچنین مباحثی درمورد Qt آشنا می‌شوند.            '
            ],

            //--------------------------------------------------------------

            'python' => [
                'title' => 'Python',
                'presenter' => 'parham',
                'level' => 'متوسط',
                'time' => 'هر دو روز - ۸ تا ۱۴',
                'room' => 'بعدا اعلام می‌شود',
                'desc' => '
یکی از زبان‌هایی که در سال‌های اخیر توانسته سهم زیادی از برنامه‌های تولیدشده به صورت متن‌باز را به خود اختصاص دهد زبان پایتون است. این زبان ویژگی‌های بسیاری دارد که از جمله می‌توان به ارتباط بسیار خوب با آن با زبان C یا dynamic type بودن آن اشاره کرد. در این کارگاه قصد داریم با تعدادی از این ویژگی‌ها آشنا شویم. به طور کلی در طی این دو روز مباحثی همچون Socket Programming، Design Patterns و... را معرفی می‌کنیم.            '
            ],



        ];
        return $workshops;
    }

    public function index() {
        $presenters = $this->get_the_presenters();
        $workshops = $this->get_the_workshops();
        return view('landing.index', ['presenters' => $presenters, 'workshops' => $workshops]);
//        return view('landing.index', ['presenters' => $presenters]);
    }
}
