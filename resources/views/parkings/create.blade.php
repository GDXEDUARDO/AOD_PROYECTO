<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class ="container">
    <h1>Estacionamiento de bodega:</h1>

    <form action="{{ route('parkings.store') }}" method="post">

        @csrf

        <div>
            <label for="">Matrícula:</label>
            <input class="form-control" type="text" name="matricule" id="" placeholder="Matrícula">
        </div>

        <div>
            <label for="">Marca:</label>
            <input class="form-control" type="text" name="brand" id="" placeholder="Marca">
        </div>

        <div>
            <label for="">Modelo:</label>
            <input class="form-control" type="text" name="model" id="" placeholder="Modelo">
        </div>

        <div>
            <label for="">color:</label>
            <input class="form-control" type="text" name="color" id="" placeholder="color">
        </div>

        <div>
            <label for="">Descripción:</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10"></textarea>
        </div>

        <div>
            <label for="">Número de puertas:</label>
            <input class="form-control" type="number" name="num_doors" id="" placeholder="Número de puertas">
        </div>

        <div>
            <label for="">Fecha y hora de entrada:</label>
            <input class="form-control" type="datetime" name="date_and_time_of_entry" id="" placeholder="Fecha y hora de entrada">
        </div>

        <div>
            <label for="">Fecha y hora de salida:</label>
            <input class="form-control" type="datetime" name="date_and_time_of_departure" id="" placeholder="Fecha y hora de salida">
        </div>

        <div>
            <label for="">Nombre del conductor:</label>
            <input class="form-control" type="text" name="drivers_name" id="" placeholder="Nombre del conductor">
        </div>

        <input class="btn btn-primary" type="submit" value="Guardar">

    </form>

</div>
