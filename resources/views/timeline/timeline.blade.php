<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="../css/timeline.css">
</head>

<body>
<ul class="main">
    <li class="date">
        <h3>۲۲ اردیبهشت</h3>
        <p>جدول زمانی روز صفرم</p>
    </li>
    <li class= "events">
        @foreach($sections as $section)
            <?php if(strpos($section['date'], '0') !== false) : ?>

            <ul class="events-detail">
                <li>
                    <a href="{{ route('app::section',[$section->id]) }}">
                        <span class="event-time">{!! $section['time'] !!} - </span>
                            <span class="event-name">@if($section['type'] == 'workshop')
                                    کارگاه
                                @elseif($section['type'] == 'presentation')
                                    ارائه
                                @else
                                    {!! $section['type'] !!}
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
            <?php if(strpos($section['date'], '1') !== false) : ?>

            <ul class="events-detail">
                <li>
                    <a href="{{ route('app::section',[$section->id]) }}">
                        <span class="event-time">{!! $section['time'] !!} - </span>
                            <span class="event-name">@if($section['type'] == 'workshop')
                                    کارگاه
                                @elseif($section['type'] == 'presentation')
                                    ارائه
                                @else
                                    {!! $section['type'] !!}
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
        <p>جدول زمانی روز دوم</p>
    </li>
    <li class= "events">
        @foreach($sections as $section)
            <?php if(strpos($section['date'], '2') !== false) : ?>

            <ul class="events-detail">
                <li>
                    <a href="{{ route('app::section',[$section->id]) }}">
                        <span class="event-time">{!! $section['time'] !!} - </span>
                            <span class="event-name">@if($section['type'] == 'workshop')
                                    کارگاه
                                @elseif($section['type'] == 'presentation')
                                    ارائه
                                @else
                                    {!! $section['type'] !!}
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

</ul>
</body>
</html>