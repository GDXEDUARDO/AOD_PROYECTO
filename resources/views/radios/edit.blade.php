<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class ="container">
    <h1>Actualización del programa de Radio:<b>{{ $radio->program_name }}</b></h1>

    <form action="{{ route('radios.update', $radio->id) }}" method="post">

        @csrf
        @method('PUT')
        <input type="hidden" name="id">
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Nombre del programa:</label>
            <input class="form-control" type="text" name="program_name" value="{{  $radio->program_name }}" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Tema del día:</label>
            <input class="form-control" type="text" name="topic" value="{{  $radio->topic }}" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Locutor Asignado:</label>
            <input class="form-control" type="text" name="assigned_announcer" value="{{  $radio->assigned_announcer }}" required>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">locutor invitado 1:</label>
            <input class="form-control" type="text" name="invited_announcer_1" value="{{  $radio->invited_announcer_1 }}">
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">locutor invitado 2:</label>
            <input class="form-control" type="text" name="invited_announcer_2" value="{{  $radio->invited_announcer_2 }}">
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">locutor invitado 3:</label>
            <input class="form-control" type="text" name="invited_announcer_3" value="{{  $radio->invited_announcer_3 }}">
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">locutor invitado 4:</label>
            <input class="form-control" type="text" name="invited_announcer_4" value="{{  $radio->invited_announcer_4 }}">
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Fecha y Hora de Inicio del Programa:</label>
            <input class="form-control" type="datetime" name="program_start_date_and_time" value="{{  $radio->program_start_date_and_time }}" required>
        </div>

        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Fecha y Hora del Final del Programa:</label>
            <input class="form-control" type="datetime" name="end_date_and_time_of_the_program" value="{{  $radio->end_date_and_time_of_the_program }}" required>
        </div>
    </div>
        <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4">
            <label for="">Canción de la semana:</label>
            <input class="form-control" type="text" name="song_of_the_week" value="{{$radio->song_of_the_week }}">
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <input class="btn btn-info" type="reset" value="Restablecer">
        <input class="btn btn-primary" type="submit" value="Guardar">

    </form>

</div>