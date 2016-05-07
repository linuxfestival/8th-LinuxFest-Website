@extends('layout.app')

@section('content')
    <section class="container">

        <section class="session-container">
            <div style="text-align: center">
                <h1>
                    جدول زمانی جشنواره
                </h1>
            </div>
            <hr>
            <div class="row" id="timeline-div">
                <div class="col-md-4 column-timeline">
                    <ul>
                        <h1>چهارشنبه ۲۲ اردیبهشت (روز صفرم)</h1>
                        <li style="color: #ffffff;
    background-color: #f44d22;">
                            <time class="c1">۱۳:۰۰</time>
                            <section class="mysection">
                                کارگاه نصب لینوکس و یک دورهمی با شرکت‌کنندگان
                            </section>
                        </li>
                        <li>
                        <time class="c1">۱۸:۰۰</time>
                        <section class="mysection">
                          پایان روز صفرم جشنواره!
                        </section>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 column-timeline">
                    <ul>
                        <h1>پنج‌شنبه ۲۳ اردیبهشت (روز اول)</h1>
                        <li style="color: #383838;
    background-color: #77c9f4;">
                            <time class="c1">۹:۰۰</time>
                            <section class="mysection">
                                کارگاه لینوکس مقدماتی
                                <br/>
                                کارگاه Python Basic
                                <br/>
                                کارگاه Embedded Systems بخش System on a Board
                                <br/>
                                کارگاه Network and Security
                                <br/>
                                کارگاه Docker
                            </section>
                        </li>
                        <li style="color: #383838;
    background-color: #77c9f4;">
                            <time class="c1">۱۰:۴۵</time>
                            <section class="mysection">
                                کارگاه لینوکس مقدماتی
                                <br/>
                           کارگاه Python Advanced
                                <br/>
                                کارگاه Embedded Systems‌ بخش System on a Board
                                <br/>
                                کارگاه Network and Security
                                <br/>
                                کارگاه Docker
                            </section>
                        </li>
                        <li style="color: #383838;
    background-color: #4dc09a;">
                            <time>۱۲:۳۰</time>
                            <section class="mysection">نهار</section>
                        </li>
                        <li style="color: #e0dbfa;
    background-color: #415bc0;">
                            <time>۱۴:۰۰</time>
                            <section class="mysection">ارائه IaaS</section>
                        </li>
                        <li style="color: #e0dbfa;
    background-color: #415bc0;">
                            <time>۱۴:۳۰</time>
                            <section class="mysection">ارائه Google Kubernetes</section>
                        </li>
                        <li style="color: #e0dbfa;
    background-color: #415bc0;">
                            <time>۱۵:۰۰</time>
                            <section class="mysection">ارائه Docker</section>
                        </li>
                        <li style="color: #e0dbfa;
    background-color: #415bc0;">
                            <time>۱۵:۳۰</time>
                            <section class="mysection">ارائه CoreOS</section>
                        </li>
                        <li style="color: #e0dbfa;
    background-color: #415bc0;">
                            <time>۱۶:۰۰</time>
                            <section class="mysection">ارائه Data Wherehouse and Dimensional Modeling</section>
                        </li>
                        <li style="color: #e0dbfa;
    background-color: #415bc0;">
                            <time>۱۷:۳۰</time>
                            <section class="mysection">ارائه Ubuntu on Portable Devices</section>
                        </li>
                        <li style="color: #1b000b;
    background-color: rgb(237, 211, 82);">
                            <time>۱۸:۰۰</time>
                            <section class="mysection">برد بحث و گفت و گو پیرامون موضوع Privacy in Modern Age</section>
                        </li>
                        <li>
                            <time>۱۹:۰۳۰</time>
                            <section class="mysection">پایان روز اول جشنواره!</section>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4 column-timeline">
                    <ul>
                        <h1>جمعه ۲۴ اردیبهشت (روز دوم)</h1>
                        <li style="color: #383838;
    background-color: #77c9f4;">
                            <time class="c2">۹:۰۰</time>
                            <section class="mysection">
                                کارگاه لینوکس مقدماتی
                                <br/>
                                کارگاه GoLang
                                <br/>
                                کارگاه Embeded-Systems بخش From Scratch
                                <br/>
                                کارگاه Network & Security
                                <br/>
                                کارگاه OpenStack
                                <br/>
                                کارگاه WebServers‌ (ادامه کارگاه Docker)
                                <br/>
                                کارگاه MATLAB‌ و Scientific Tools
                                <br/>
                                کارگاه لینوکس پیشرفته
                            </section>
                        </li>
                        <li style="color: #383838;
    background-color: #77c9f4;">
                            <time class="c2">۱۰:۴۵</time>
                            <section class="mysection">
                                کارگاه لینوکس مقدماتی
                                <br/>
                                کارگاه GoLang
                                <br/>
                                کارگاه Embeded-Systems بخش IoT Basics
                                <br/>
                                کارگاه Wireshark and TCP/IP concepts
                                <br/>
                                کارگاه OpenStack
                                <br/>
                                کارگاه WebServers‌ (ادامه کارگاه Docker)
                                <br/>
                                کارگاه MATLAB‌ و Scientific Tools
                                <br/>
                                کارگاه لینوکس پیشرفته
                            </section>
                        </li>
                        <li style="color: #383838;
    background-color: #4dc09a;">
                            <time>۱۲:۳۰</time>
                            <section class="mysection">نهار</section>
                        </li>
                        <li style="color: #e0dbfa;
    background-color: #415bc0;">
                            <time>۱۴:۰۰</time>
                            <section class="mysection">ارائه Low Level Networking Inside Docker</section>
                        </li>
                        <li style="color: #e0dbfa;
    background-color: #415bc0;">
                            <time>۱۴:۳۰</time>
                            <section class="mysection">ارائه IoT And IPv6</section>
                        </li>
                        <li style="color: #e0dbfa;
    background-color: #415bc0;">
                            <time>۱۵:۰۰</time>
                            <section class="mysection">ارائه The goodies Everyone Must Have</section>
                        </li>
                        <li style="color: #240002;
    background-color: #00ee3c;">
                            <time>۱۵:۳۰</time>
                            <section class="mysection">
                                Lightening Presentations
                                <br/>
                                ارائه Faster And Simpler, Beyond Terminal
                                <br/>
                                ارائه Gulp: One-Step builds & automation
                                <br/>
                                ارائه An introduction to TensorFlow
                                <br/>
                                ارائه What can we learn from a simple command?

                            </section>
                        </li>
                        <li style="color: #e0dbfa;
    background-color: #415bc0;">
                            <time>۱۶:۱۰</time>
                            <section class="mysection">ارائه Start Using vim</section>
                        </li>
                        <li style="color: #e0dbfa;
    background-color: #415bc0;">
                            <time>۱۶:۳۰</time>
                            <section class="mysection">ارائه دکتر پی‌براه</section>
                        </li>
                        <li style="color: #ffffff;
    background-color: #f44d22;">
                            <time>۱۷:۰۰</time>
                            <section class="mysection">پایان روز دوم و اختتامیه هشتمین دوره جشنواره لینوکس و نرم افزارهای متن‌باز امیرکبیر</section>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

    </section>

@endsection