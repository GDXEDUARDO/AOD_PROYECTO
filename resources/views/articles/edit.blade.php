<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class ="container">
    <h1>Actualizar los datos del artículo:<b>{{ $article->article_name }}</b></h1>

    <form action="{{ route('articles.update', $article->id)}}" method="post">

        @csrf
        @method('PUT')
        <input type="hidden" name="id">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Nombre del Artículo:</label>
            <input class="form-control" type="text" name="article_name" value="{{ $article->article_name }}" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Tipo de Artículo:</label>
            <input class="form-control" type="text" name="article_type" value="{{ $article->article_type }}">
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Número de salidas del articulo:</label>
            <input class="form-control" type="number" name="num_outputs_of_article" value="{{ $article->num_outputs_of_article }}">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Número de entradas del articulo:</label>
            <input class="form-control" type="number" name="num_entries_of_article" value="{{ $article->num_entries_of_article }}">
        </div>


        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Fecha de llegada del Artículo:</label>
            <input class="form-control" type="date" name="article_arrival_date" value="{{ $article->article_arrival_date }}" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Fecha de salida del Artículo:</label>
            <input class="form-control" type="date" name="article_departure_date" value="{{ $article->article_departure_date }}" required>
        </div>
    </div>
        <div class="row">

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Número de pedido de retiro del artículo:</label>
            <input class="form-control" type="number" name="article_withdrawal_order_number" value="{{ $article->article_withdrawal_order_number }}" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">¿Quién retira el Artículo?</label>
            <input class="form-control" type="text" name="who_removes" value="{{ $article->who_removes }}" required>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Cantidad de retiros del Artículo:</label>
            <input class="form-control" type="number" name="amount_of_withdrawal" value="{{ $article->amount_of_withdrawal }}" required>
        </div>
    </div>
    <div class="row">

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Cantidad en existencia:</label>
            <input class="form-control" type="number" name="quantity_in_existence" value="{{ $article->quantity_in_existence }}" required>
        </div>
    
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Descripción del Artículo:</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $article->description }}</textarea>
        </div>
    </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <input class="btn btn-info" type="reset" value="Restablecer">
        <input class="btn btn-primary" type="submit" value="Guardar">

    </form>

</div>