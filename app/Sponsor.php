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
            'logo' => '/img/sponsors/no_image.png',
            'url' => 'http://iranargham.com',
        ],

        [
            'id' => 'peivast',
            'title' => 'پیوست',
            'logo' => '/img/sponsors/no_image.png',
            'url' => 'http://peivast.com/',
        ],

        [
            'id' => 'peidad',
            'title' => 'پیداد',
            'logo' => '/img/sponsors/peidad.png',
            'url' => 'http://peidad.com/',
        ],

    ];

}
