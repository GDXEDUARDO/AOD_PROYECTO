<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class ="container">
    <h1>Estacionamiento de bodega:</h1>

    <form action="{{ route('parkings.store') }}" method="post">

        @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Matrícula:</label>
            <input class="form-control" type="text" name="matricule" id="" placeholder="Matrícula" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Marca:</label>
            <input class="form-control" type="text" name="brand" id="" placeholder="Marca" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Modelo:</label>
            <input class="form-control" type="text" name="model" id="" placeholder="Modelo">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">color:</label>
            <input class="form-control" type="text" name="color" id="" placeholder="color" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Número de puertas:</label>
            <input class="form-control" type="number" name="num_doors" id="" placeholder="Número de puertas" required>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Fecha y hora de entrada:</label>
            <input class="form-control" type="datetime" name="date_and_time_of_entry" id="" placeholder="Fecha y hora de entrada" required>
        </div>
    </div>
    <div class="row">
        
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Fecha y hora de salida:</label>
            <input class="form-control" type="datetime" name="date_and_time_of_departure" id="" placeholder="Fecha y hora de salida" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Nombre del conductor:</label>
            <input class="form-control" type="text" name="drivers_name" id="" placeholder="Nombre del conductor" required>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Descripción:</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
        </div>
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <input class="btn btn-info" type="reset" value="Restablecer">
        <input class="btn btn-primary" type="submit" value="Guardar">

    </form>

</div>
