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
            'logo' => '//media.licdn.com/mpr/mpr/shrink_200_200/p/2/000/1ae/26c/349c0fc.jpg?s=200',
            'url' => 'http://iranargham.com',
        ],

        [
            'id' => 'peivast',
            'title' => 'پیوست',
            'logo' => '//media.licdn.com/mpr/mpr/shrink_200_200/p/2/000/1ae/26c/349c0fc.jpg?s=200',
            'url' => 'http://peivast.com/',
        ],

        [
            'id' => 'peidad',
            'title' => 'پیداد',
            'logo' => '//media.licdn.com/mpr/mpr/shrink_200_200/p/2/000/1ae/26c/349c0fc.jpg?s=200',
            'url' => 'http://peidad.com/',
        ],

    ];

}
