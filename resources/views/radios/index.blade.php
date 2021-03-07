<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

@forelse($radios as $radio)
    <li>
        <h3>{{ $radio->program_name}} {{ $radio->topic }}</h3>
        <p>{{ $radio->assigned_announcer }}</p>
        <br>

    </li>

@empty
    <h1>La tabla no tiene datos :'c</h1>
@endforelse