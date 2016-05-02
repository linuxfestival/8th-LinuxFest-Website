<?php

namespace App;

/**
 * @property mixed id
 * @property mixed title
 * @property mixed logo
 * @property mixed url
 */
class Sponsor extends StaticModel
{
    protected $guarded = [];

    public static $data = [
        [
            'id' => 'iranargham',
            'type' => 'money',
            'title' => 'ایران ارقام',
            'logo' => '/img/sponsors/iranargham.png',
            'url' => 'http://iranargham.com',
        ],

        [
            'id' => 'peivast',
            'type' => 'press',
            'title' => 'پیوست',
            'logo' => '/img/sponsors/peivast.png',
            'url' => 'http://peivast.com/',
        ],

        [
            'id' => 'peidad',
            'type' => 'press',
            'title' => 'پیداد',
            'logo' => '/img/sponsors/peidad.png',
            'url' => 'http://peidad.com/',
        ],
		
		[
		     'id' => 'itc',
            'title' => 'سازمان فناوری اطلاعات ایران',
            'logo' => 'http://www.sinaictgroup.com/uploads/Links/ITC.png',
            'url' => 'http://itc.ir/',
		]
,       [
            'id' => 'itc',
            'type' => 'money',
            'title' => 'سازمان فناوری اطلاعات ایران',
            'logo' => 'http://www.sinaictgroup.com/uploads/Links/ITC.png',
            'url' => 'http://itc.ir/',
        ],
        [
            'id' => 'anjoman',
            'type' => 'moral',
            'title' => 'اداره کل انجمن‌های علمی دانشگاه صنعتی امیرکبیر',
            'logo' => '../img/sponsors/anjoman_kol.png',
            'url' => 'http://sao.aut.ac.ir/',
        ],
        [
            'id' => 'aut',
            'type' => 'moral',
            'title' => 'دانشگاه صنعتی امیرکبیر',
            'logo' => '../img/sponsors/aut.png',
            'url' => 'http://aut.ac.ir/',
        ],
        [
            'id' => 'fandogh',
            'type' => 'moral',
            'title' => 'گروه نرم‌افزاری فندق',
            'logo' => '../img/sponsors/Fandogh.png',
            'url' => 'http://fandogh.org',
        ],
        [
            'id' => 'linuxFest',
            'type' => 'founder',
            'title' => 'دبیرخانه جشنواره ملی لینوکس و نرم‌افزارهای متن‌باز',
            'logo' => '../img/sponsors/linuxfest.png',
            'url' => 'http://LinuxFest.ir',
        ],
        [
            'id' => 'ssc',
            'type' => 'founder',
            'title' => 'انجمن علمی دانشجویی دانشکده مهندسی کامپیوتر و فناوری اطلاعات دانشگاه صنعتی امیرکبیر',
            'logo' => '../img/sponsors/anjoman.png',
            'url' => 'http://ceit-ssc.ir',
        ],
        [
            'id' => 'ceit',
            'type' => 'founder',
            'title' => 'دانشکده مهندسی کامپیوتر و فناوری اطلاعات دانشگاه صنعتی امیرکبیر',
            'logo' => '../img/sponsors/autceit.png',
            'url' => 'http://ceit.aut.ac.ir',
        ],


    ];

}
