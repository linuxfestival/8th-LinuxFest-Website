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
            'type' => 'gold',
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
            'type' => 'bronze',
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

    ];

}
