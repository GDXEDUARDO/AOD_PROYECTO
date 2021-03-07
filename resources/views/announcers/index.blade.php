<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

@forelse($announcers as $announcer)
    <li>
        <h3>{{ $announcer->first_name}} {{ $announcer->date_and_time_of_entry }}</h3>
        <p>{{ $announcer->minutes_in_the_cabin }}</p>
        <br>

    </li>

@empty
    <h1>La tabla no tiene datos :'c</h1>
@endforelse