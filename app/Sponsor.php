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
            'title' => 'ایران ارقام',
            'logo' => '/img/sponsors/iranargham.png',
            'url' => 'http://iranargham.com',
        ],

        [
            'id' => 'peivast',
            'title' => 'پیوست',
            'logo' => '/img/sponsors/peivast.png',
            'url' => 'http://peivast.com/',
        ],

        [
            'id' => 'peidad',
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

    ];

}
