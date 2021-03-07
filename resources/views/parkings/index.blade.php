<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

@forelse($parkings as $parking)
    <li>
        <h3>{{ $parking->matricule}} {{ $parking->model }}</h3>
        <p>{{ $parking->description }}</p>
        <br>

    </li>

@empty
    <h1>La tabla no tiene datos :'c</h1>
@endforelse