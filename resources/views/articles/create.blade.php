<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class ="container">
    <h1>Orden de retiro de inventario:</h1>

    <form action="{{ route('articles.store') }}" method="post">

        @csrf

        <div>
            <label for="">Nombre del Artículo:</label>
            <input class="form-control" type="text" name="article_name" id="" placeholder="Nombre del Artículo">
        </div>

        <div>
            <label for="">Tipo de Artículo:</label>
            <input class="form-control" type="text" name="article_type" id="" placeholder="Tipo de Artículo">
        </div>

        <div>
            <label for="">Número de salidas del articulo:</label>
            <input class="form-control" type="number" name="num_outputs_of_article" id="" placeholder="Número de salidas del articulo">
        </div>

        <div>
            <label for="">Número de entradas del articulo:</label>
            <input class="form-control" type="number" name="num_entries_of_article" id="" placeholder="Número de entradas del articulo">
        </div>

        <div>
            <label for="">Descripción del Artículo:</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
        </div>

        <div>
            <label for="">Fecha de llegada del Artículo:</label>
            <input class="form-control" type="date" name="article_arrival_date" id="" placeholder="Fecha de llegada del Artículo">
        </div>

        <div>
            <label for="">Fecha de salida del Artículo:</label>
            <input class="form-control" type="date" name="article_departure_date" id="" placeholder="Fecha de salida del Artículo">
        </div>

        <div>
            <label for="">Número de pedido de retiro del artículo:</label>
            <input class="form-control" type="number" name="article_withdrawal_order_number" id="" placeholder="número de pedido de retiro del artículo">
        </div>

        <div>
            <label for="">¿Quién retira el Artículo?</label>
            <input class="form-control" type="text" name="who_removes" id="" placeholder="¿Quién retira el Artículo?">
        </div>

        <div>
            <label for="">Cantidad de retiros del Artículo:</label>
            <input class="form-control" type="number" name="amount_of_withdrawal" id="" placeholder="Cantidad de retiros del Artículo">
        </div>

        <div>
            <label for="">Cantidad en existencia:</label>
            <input class="form-control" type="number" name="quantity_in_existence" id="" placeholder="Cantidad en existencia">
        </div>

        <input class="btn btn-primary" type="submit" value="Guardar">

    </form>

</div>
