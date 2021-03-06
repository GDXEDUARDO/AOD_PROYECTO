<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class ="container">
    <h1>Programas de Radio:</h1>

    <form action="{{ route('radios.store') }}" method="post">

        @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Nombre del programa:</label>
            <input class="form-control" type="text" name="program_name" id="" placeholder="Nombre del programa:" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Tema del día:</label>
            <input class="form-control" type="text" name="topic" id="" placeholder="Tema del día" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Locutor Asignado:</label>
            <input class="form-control" type="text" name="assigned_announcer" id="" placeholder="Locutos Asignado" required>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">locutor invitado 1:</label>
            <input class="form-control" type="text" name="invited_announcer_1" id="" placeholder="locutor invitado 1">
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">locutor invitado 2:</label>
            <input class="form-control" type="text" name="invited_announcer_2" id="" placeholder="locutor invitado 2">
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">locutor invitado 3:</label>
            <input class="form-control" type="text" name="invited_announcer_3" id="" placeholder="locutor invitado 3">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">locutor invitado 4:</label>
            <input class="form-control" type="text" name="invited_announcer_4" id="" placeholder="locutor invitado 4">
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Fecha y Hora de Inicio del Programa:</label>
            <input class="form-control" type="datetime" name="program_start_date_and_time" id="" placeholder="Fecha y Hora de Inicio del Programa" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Fecha y Hora del Final del Programa:</label>
            <input class="form-control" type="datetime" name="end_date_and_time_of_the_program" id="" placeholder="Fecha y Hora del Final del Programa" required>
        </div>
    </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Canción de la semana:</label>
            <input class="form-control" type="text" name="Song_of_the_week" id="" placeholder="Canción de la semana">
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <input class="btn btn-info" type="reset" value="Restablecer">
        <input class="btn btn-primary" type="submit" value="Guardar">

    </form>

</div>
