<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class ="container">
    <h1>Actualizar datos del locutor:<b>{{ $announcer->first_name}}</b></h1>

    <form action="{{ route('announcers.update', $announcer->id) }}" method="post">

        @csrf
        @method('PUT')
        <input type="hidden" name="id">
<div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Primer Nombre:</label>
            <input class="form-control" type="text" name="first_name" value="{{ $announcer->first_name}}" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Segundo Nombre:</label>
            <input class="form-control" type="text" name="second_name" value="{{ $announcer->second_name }}">
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Apellido Paterno:</label>
            <input class="form-control" type="text" name="last_name" value="{{ $announcer->last_name }}" required>
        </div>
        <br>
</div>
<div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Apellido Materno:</label>
            <input class="form-control" type="text" name="mothers_last_name" value="{{ $announcer->mothers_last_name }}" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Fecha y Hora de entrada:</label>
            <input class="form-control" type="datetime" name="date_and_time_of_entry" value="{{ $announcer->date_and_time_of_entry }}" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Fecha y Hora de salida:</label>
            <input class="form-control" type="datetime" name="date_and_time_of_departure" value="{{ $announcer->date_and_time_of_departure }}" required>
        </div>
        <br>
</div>       
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Minutos en Cabina:</label>
            <input class="form-control" type="number" name="minutes_in_the_cabin" value="{{ $announcer->minutes_in_the_cabin }}" required> 
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <input class="btn btn-info" type="reset" value="Restablecer">
        <input class="btn btn-primary" type="submit" value="Guardar">

    </form>

</div>