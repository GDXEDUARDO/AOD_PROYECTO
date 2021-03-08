<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class ="container">
    <h1>Actualizacion del estacionamiento de bodega:<b>{{ $parking->brand }}</b></h1>

    <form action="{{ route('parkings.update', $parking->id) }}" method="post">

        @csrf
        @method('PUT')
        <input type="hidden" name="id">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Matrícula:</label>
            <input class="form-control" type="text" name="matricule" value="{{ $parking->matricule }}" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Marca:</label>
            <input class="form-control" type="text" name="brand" value="{{ $parking->brand }}" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Modelo:</label>
            <input class="form-control" type="text" name="model" value="{{ $parking->model }}">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">color:</label>
            <input class="form-control" type="text" name="color" value="{{ $parking->color }}" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Número de puertas:</label>
            <input class="form-control" type="number" name="num_doors" value="{{ $parking->num_doors }}" required>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Fecha y hora de entrada:</label>
            <input class="form-control" type="datetime" name="date_and_time_of_entry" value="{{ $parking->date_and_time_of_entry }}" required>
        </div>
    </div>
    <div class="row">
        
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Fecha y hora de salida:</label>
            <input class="form-control" type="datetime" name="date_and_time_of_departure" value="{{ $parking->date_and_time_of_departure }}" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Nombre del conductor:</label>
            <input class="form-control" type="text" name="drivers_name" value="{{ $parking->drivers_name }}" required>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Descripción:</label>
            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $parking->description }}</textarea>
        </div>
    </div>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <input class="btn btn-info" type="reset" value="Restablecer">
        <input class="btn btn-primary" type="submit" value="Guardar">

    </form>

</div>