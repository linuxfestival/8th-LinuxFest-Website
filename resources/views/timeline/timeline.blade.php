<link href='../css/timeline.css' rel='stylesheet' type='text/css'>

<ul class="main">
    <li class="date">
        <h3>۲۲ اردیبهشت</h3>
        <p>جدول زمانی روز صفرم</p>
    </li>
    <li class= "events">
        @foreach($sections as $section)
            <?php if($section['date'] == 0) : ?>

                <ul class="events-detail">
                    <li>
                        <a href="{{ route('app::section',[$section->id]) }}">
                            <span class="event-time">{!! $section['time'] !!} - </span>
                            <span class="event-name">@if($section['type'] == 'workshop')
                                    کارگاه
                                @elseif($section['type'] == 'presentation')
                                    ارائه
                                @endif
                                {!! $section['title'] !!}</span>
                            <br/>
                            <span class="event-location">{!! $section['room'] !!}</span>
                        </a>
                    </li>
                </ul>
            <?php endif; ?>
        @endforeach
    </li>

    <li class="date">
        <h3>۲۳ اردیبهشت</h3>
        <p>جدول زمانی روز اول</p>
    </li>
    <li class= "events">
        @foreach($sections as $section)
            @if($section['date'].contains('1') )
                <ul class="events-detail">
                    <li>
                        <h2>@if($section['type'] == 'workshop')
                                کارگاه
                            @elseif($section['type'] == 'presentation')
                                ارائه
                            @endif
                            {!! $section['title'] !!}</h2>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('app::section',[$section->id]) }}">
                            <span class="event-time">۱:۰۰ ظهر تا ۶:۰۰ عصر - </span>
                            <span class="event-name">کارگاه نصب و دورهمی با شرکت‌کنندگان</span>
                            <br />
                            <span class="event-location">سایت کامپیوتر دانشکده مهندسی کامپیوتر و فناوری اطلاعات دانشگاه صنعتی امیرکبیر</span>
                        </a>
                    </li>
                </ul>
            @endif
        @endforeach
    </li>

</ul>