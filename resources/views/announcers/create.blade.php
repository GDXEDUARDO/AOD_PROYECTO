<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class ="container">
    <h1>Locutores:</h1>

    <form action="{{ route('announcers.store') }}" method="post">

        @csrf
<div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Primer Nombre:</label>
            <input class="form-control" type="text" name="first_name" id="" placeholder="Primer Nombre:" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Segundo Nombre:</label>
            <input class="form-control" type="text" name="second_name" id="" placeholder="Segundo Nombre">
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Apellido Paterno:</label>
            <input class="form-control" type="text" name="last_name" id="" placeholder="Apellido Paterno" required>
        </div>
        <br>
</div>
<div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Apellido Materno:</label>
            <input class="form-control" type="text" name="mothers_last_name" id="" placeholder="Apellido Materno" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Fecha y Hora de entrada:</label>
            <input class="form-control" type="datetime" name="date_and_time_of_entry" id="" placeholder="Fecha y Hora de entrada" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Fecha y Hora de salida:</label>
            <input class="form-control" type="datetime" name="date_and_time_of_departure" id="" placeholder="Fecha y Hora de salida" required>
        </div>
        <br>
</div>       
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Minutos en Cabina:</label>
            <input class="form-control" type="number" name="minutes_in_the_cabin" id="" placeholder="Minutos en Cabina" required> 
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <input class="btn btn-info" type="reset" value="Restablecer">
        <input class="btn btn-primary" type="submit" value="Guardar">

    </form>

</div>
