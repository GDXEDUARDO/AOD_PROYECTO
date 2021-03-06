<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class ="container">
    <h1>Orden de retiro de inventario:</h1>

    <form action="{{ route('articles.store') }}" method="post">

        @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Nombre del Artículo:</label>
            <input class="form-control" type="text" name="article_name" id="" placeholder="Nombre del Artículo" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Tipo de Artículo:</label>
            <input class="form-control" type="text" name="article_type" id="" placeholder="Tipo de Artículo">
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Número de salidas del articulo:</label>
            <input class="form-control" type="number" name="num_outputs_of_article" id="" placeholder="Número de salidas del articulo">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Número de entradas del articulo:</label>
            <input class="form-control" type="number" name="num_entries_of_article" id="" placeholder="Número de entradas del articulo">
        </div>


        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Fecha de llegada del Artículo:</label>
            <input class="form-control" type="date" name="article_arrival_date" id="" placeholder="Fecha de llegada del Artículo" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Fecha de salida del Artículo:</label>
            <input class="form-control" type="date" name="article_departure_date" id="" placeholder="Fecha de salida del Artículo" required>
        </div>
    </div>
        <div class="row">

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Número de pedido de retiro del artículo:</label>
            <input class="form-control" type="number" name="article_withdrawal_order_number" id="" placeholder="número de pedido de retiro del artículo" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">¿Quién retira el Artículo?</label>
            <input class="form-control" type="text" name="who_removes" id="" placeholder="¿Quién retira el Artículo?" required>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Cantidad de retiros del Artículo:</label>
            <input class="form-control" type="number" name="amount_of_withdrawal" id="" placeholder="Cantidad de retiros del Artículo" required>
        </div>
    </div>
    <div class="row">

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Cantidad en existencia:</label>
            <input class="form-control" type="number" name="quantity_in_existence" id="" placeholder="Cantidad en existencia" required>
        </div>
    
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Descripción del Artículo:</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
        </div>
    </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <input class="btn btn-info" type="reset" value="Restablecer">
        <input class="btn btn-primary" type="submit" value="Guardar">

    </form>

</div>
