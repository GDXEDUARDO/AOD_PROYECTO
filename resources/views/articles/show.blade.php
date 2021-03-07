<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class="container">

<br>
<br>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="card-title"><p>{{ $article->article_name }}</p></h2>
                </div>
                    <div class="col-md-4">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-primary" href="{{route('articles.index')}}"><- Volver</a>
                        </div>
                    </div>
                </div>
        </div>
    <div class="card-body">

        <table class="table table-dark table-striped">

                <thead>
                    <tr>
                       
                        <th>Fecha de llegada del artículo</th>
                        <th>Fecha de salida del artículo</th>
                        <th>Número de Orden de Retiro</th>
                        <th>Información</th>            
                    </tr>
                </thead>

                <tbody>
                    <tr>
                       
                        <td><p>{{ $article->article_arrival_date }}</p></td>
                        <td><p>{{$article->article_departure_date}}</p></td>
                        <td><p>{{$article->article_withdrawal_order_number}}</p></td>
                        <td>
                            <p><b>Tipo:</b>{{ $article->article_type}}</p>
                            <p><b>Número de salidas del artículo:</b>{{ $article->num_outputs_of_article}}</p>
                            <p><b>Número de entradas del artículo:</b>{{ $article->num_entries_of_article}}</p>
                            <p><b>Descripción:</b>{{ $article->description}}</p>
                            <p><b>¿Quién retira?:</b>{{ $article->who_removes}}</p>
                            <p><b>Cantidad de Retiro:</b>{{ $article->amount_of_withdrawal}}</p>
                            <p><b>Cantidad en existencia:</b>{{ $article->quantity_in_existence}}</p>
                        </td>
                    </tr>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <div class="col">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" href="{{route('articles.edit', $article->id)}}">Editar</a>
                <a class="btn btn-danger" href="{{route('articles.destroy', $article->id)}}">Eliminar</a>
             </div>
        </div>
    </div>
</div>