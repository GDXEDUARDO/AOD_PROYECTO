<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

@forelse($articles as $article)
    <li>
        <h3>{{ $article->article_name}} {{ $article->article_type }}</h3>
        <p>{{ $article->description }}</p>
        <br>

    </li>

@empty
    <h1>La tabla no tiene datos :'c</h1>
@endforelse