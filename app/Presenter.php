<?php

namespace App;

/**
 * @property mixed id
 * @property mixed name
 * @property mixed avatar
 * @property mixed url
 * @property mixed bio
 */
class Presenter extends StaticModel
{
    public static $data = [
        [
            'id' => 'bakhshis',
            'name' => 'بهادر بخشی',
            'avatar' => '//media.licdn.com/mpr/mpr/shrink_200_200/p/2/000/1ae/26c/349c0fc.jpg?s=200',
            'url' => 'http://ceit.aut.ac.ir/~bakhshis/',
            'bio' => 'استادیار دانشگاه صنعتی امیرکبیر',
        ],
        [
            'id' => 'tim',
            'name' => 'Timothy Wood',
            'avatar' => '/img/Timothy.jpg',
            'url' => 'https://www.seas.gwu.edu/timothy-wood',
            'bio' => 'استادیار دانشگاه جرج واشنتگتن',
        ],
        [
            'id' => 'peyberah',
            'name' => 'امیرحسین پی‌براه',
            'avatar' => '//www.gravatar.com/avatar/95062a379d77e40f6b73093d905be817?s=200',
            'url' => 'https://www.sics.se/~amir/',
            'bio' => 'پژوهشگر در SICS'
        ],
        [
            'id' => 'alijavadi',
            'name' => 'علی جوادی',
            'avatar' => 'https://avatars2.githubusercontent.com/u/11222382?v=3&s=200',
            'url' => 'https://github.com/givia',
            'bio' => 'توسعه دهنده سمت‌سرور در کافه‌بازار'
        ],
        [
            'id' => 'afshin',
            'name' => 'افشین سلاجقه',
            'avatar' => '../img/afshin.jpg',
            'url' => 'http://iranargham.com/',
            'bio' => 'مشاور ارشد آنالیز سیستم و طراحی نرم افزار شرکت ایران ارقام'
        ],
        [
            'id' => 'danial',
            'name' => 'دانیال بهزادی',
            'avatar' => '//media.licdn.com/mpr/mpr/shrink_200_200/p/2/000/19f/245/283e32f.jpg?s=200',
            'url' => 'https://danialbehzadi.wordpress.com',
            'bio' => 'گروه کاربران ایرانی اوبونتو'
        ],
        [
            'id' => 'nasiri',
            'name' => 'محمد نصیری‌فر',
            'avatar' => 'https://avatars0.githubusercontent.com/u/8123364?v=3&s=200',
            'url' => 'https://github.com/colonelmo',
            'bio' => 'توسعه دهنده سمت‌سرور در کافه‌بازار'
        ],
        [
            'id' => 'naser',
            'name' => 'ناصر افشین',
            'avatar' => '../img/naser.jpg',
            'url' => 'http://www.sstaha.ir/',
            'bio' => 'مدیر فنی شرکت دانش بنیان سامانه صنعت طاها'
        ],
        [
            'id' => 'pooya',
            'name' => 'پویا پارسا',
            'avatar' => '//www.gravatar.com/avatar/1fddd58251edc7bf16e279b8811cd327?s=200',
            'url' => 'http://pi0.ir/',
            'bio' => 'توسعه دهنده در گروه فندق'
        ],
        [
            'id' => 'parham',
            'name' => 'پرهام الوانی',
            'avatar' => 'https://avatars1.githubusercontent.com/u/8181240?v=3&s=400',
            'url' => 'http://1995parham.github.io/about/',
            'bio' => 'توسعه‌دهنده‌ی نرم‌افزارهای متن‌باز'
        ],
        [
            'id' => 'rahimkhani',
            'name' => 'سیاوش رحیم خانی',
            'avatar' => '../img/siavash.jpg',
            'url' => 'http://www.isc.co.ir/',
            'bio' => 'متخصص شبکه در شرکت خدمات انفورماتیک'
        ],
        [
            'id' => 'gholizade',
            'name' => 'فرزاد قلی‌زاده',
            'avatar' => '../img/farzad.jpg',
            'url' => 'https://ir.linkedin.com/in/farzad-gholizadeh-444362a5',
            'bio' => 'توسعه دهنده نرم افزارهای متن‌باز'
        ],
        [
            'id' => 'taher',
            'name' => 'طاهر احمدی',
            'avatar' => 'https://avatars1.githubusercontent.com/u/7474613?v=3&s=200',
            'url' => 'https://ir.linkedin.com/in/taher-ahmadi-b3798998',
            'bio' => 'توسعه دهنده نرم افزارهای متن‌باز'
        ],
        [
            'id' => 'bahar',
            'name' => 'سینا بهارلویی',
            'avatar' => '../img/bahar.png',
            'url' => 'https://ir.linkedin.com/in/sina-baharlouei-00b4ba97',
            'bio' => 'توسعه دهنده نرم افزارهای متن‌باز'
        ],
        [
            'id' => 'mehdisaj',
            'name' => 'مهدی سجادی',
            'avatar' => 'https://media.licdn.com/media/AAEAAQAAAAAAAAPrAAAAJDNhOWExNTZiLWY2ZGEtNDg1ZC05YTc1LWIxODE4ODM4YjgxYQ.jpg',
            'url' => 'https://ir.linkedin.com/in/mahdi-sajjadi-5a0936b5',
            'bio' => 'توسعه دهنده نرم افزارهای متن‌باز'
        ],
        [
            'id' => 'abolfazl',
            'name' => 'ابوالفضل دانایی',
            'avatar' => 'https://media.licdn.com/media/AAEAAQAAAAAAAAQOAAAAJDNiMDBkNTg3LWUwZjgtNDFmZC1iYmY0LTJiNmFlODA2M2E2ZQ.jpg',
            'url' => 'https://ir.linkedin.com/in/abolfazl-danayi-77236390',
            'bio' => 'توسعه دهنده نرم افزارهای متن‌باز'
        ],
        [
            'id' => 'amir',
            'name' => 'امیر رضایی',
            'avatar' => '../img/amirreza.jpg',
            'url' => '',
            'bio' => 'توسعه دهنده نرم افزارهای متن‌باز'
        ],
        [
            'id' => 'pooyan',
            'name' => 'پویان حبیبی',
            'avatar' => '../img/pooyan.jpg',
            'url' => 'https://www.linkedin.com/in/pooyanhabibi',
            'bio' => 'توسعه دهنده نرم افزارهای متن‌باز'
        ],
        [
            'id' => 'khademi',
            'name' => 'مصطفی خادمی',
            'avatar' => '../img/khademi.jpg',
            'url' => 'http://sadad.co.ir/',
            'bio' => 'تحلیل‌گر امنیت در شرکت داده‌ورزی سداد'
        ],
        [
            'id' => 'navid',
            'name' => 'نوید فومنی',
            'avatar' => '../img/navid.jpg',
            'url' => 'https://ir.linkedin.com/in/navid-foumani-5809a5a3',
            'bio' => 'توسعه‌دهنده نرم‌افزارهای متن‌باز'
        ],
//        [
//            'id' => 'asemani',
//            'name' => 'آسمانی',
//            'avatar' => '',
//            'url' => '',
//            'bio' => ''
//        ],
//        [
//            'id' => 'reza',
//            'name' => 'رضا محمدی',
//            'avatar' => '//www.gravatar.com/avatar/ba7f4236013448700d38d3a89a9cbf99?s=200',
//            'url' => 'https://ir.linkedin.com/in/remohammadi',
//            'bio' => 'مدیر فنی کافه‌بازار'
//        ],
//        [
//            'id' => 'mohajer',
//            'name' => 'میلاد مهاجر',
//            'avatar' => '//media.licdn.com/mpr/mpr/shrink_200_200/p/7/005/0a0/153/023ba11.jpg?s=200',
//            'url' => 'https://ir.linkedin.com/pub/milad-mohajer/a9/a19/444',
//            'bio' => 'مدیر بازرگانی رایمند'
//        ],
//        [
//            'id' => 'peyman',
//            'name' => 'پیمان هوشمندی',
//            'avatar' => '//www.gravatar.com/avatar/31a61c55bc35852d5ad7d35ca129ce70?s=200',
//            'url' => 'http://arjang.ac.ir/instructor/2',
//            'bio' => 'موسسه ارژنگ'
//        ],
//        [
//            'id' => 'faraz',
//            'name' => 'فراز شمشیردار',
//            'avatar' => '//www.gravatar.com/avatar/c4baac2a7eb2c03feb46429904f7098e?s=200',
//            'url' => 'https://ir.linkedin.com/in/shamshirdar',
//            'bio' => 'توسعه‌دهنده‌ی نرم‌افزارهای متن‌باز'
//        ],
//        [
//            'id' => 'sinash',
//            'name' => 'سینا شیخ‌الاسلامی',
//            'avatar' => '//www.gravatar.com/avatar/9c773fbd22eab00f63f30a4b4a1f3a7a?s=200',
//            'url' => 'http://linkedin.com/in/sinasheikholeslami',
//            'bio' => 'توسعه‌دهنده‌ی نرم‌افزارهای متن‌باز'
//        ],
//        [
//            'id' => 'mdhheydari',
//            'name' => 'محمدحسین حیدری',
//            'avatar' => '//www.gravatar.com/avatar/67a156a371ec4ffa39a37cfc4f824ee6?s=200',
//            'url' => 'https://ir.linkedin.com/in/mdhheydari',
//            'bio' => 'توسعه‌دهنده‌ی نرم‌افزارهای متن‌باز'
//        ],
//        [
//            'id' => 'sinal',
//            'name' => 'سینا لباف',
//            'avatar' => '//www.gravatar.com/avatar/c1be53f8f8ff2ca3fbc79b466ee023c5?s=200',
//            'url' => 'https://ir.linkedin.com/pub/sina-labbaf/71/785/a86',
//            'bio' => 'توسعه‌دهنده‌ی نرم‌افزارهای متن‌باز'
//        ],

    ];

    protected $guarded = [];

}
