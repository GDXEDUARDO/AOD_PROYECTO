<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class ="container">
    <h1>Programas de Radio:</h1>

    <form action="{{ route('radios.store') }}" method="post">

        @csrf

        <div>
            <label for="">Nombre del programa:</label>
            <input class="form-control" type="text" name="program_name" id="" placeholder="Nombre del programa:">
        </div>

        <div>
            <label for="">Tema del día:</label>
            <input class="form-control" type="text" name="topic" id="" placeholder="Tema del día">
        </div>

        <div>
            <label for="">Locutor Asignado:</label>
            <input class="form-control" type="text" name="assigned_announcer" id="" placeholder="Locutos Asignado">
        </div>

        <div>
            <label for="">locutor invitado 1:</label>
            <input class="form-control" type="text" name="invited_announcer_1" id="" placeholder="locutor invitado 1">
        </div>

        <div>
            <label for="">locutor invitado 2:</label>
            <input class="form-control" type="text" name="invited_announcer_2" id="" placeholder="locutor invitado 2">
        </div>

        <div>
            <label for="">locutor invitado 3:</label>
            <input class="form-control" type="text" name="invited_announcer_3" id="" placeholder="locutor invitado 3">
        </div>

        <div>
            <label for="">locutor invitado 4:</label>
            <input class="form-control" type="text" name="invited_announcer_4" id="" placeholder="locutor invitado 4">
        </div>

        <div>
            <label for="">Fecha y Hora de Inicio del Programa:</label>
            <input class="form-control" type="datetime" name="program_start_date_and_time" id="" placeholder="Fecha y Hora de Inicio del Programa">
        </div>

        <div>
            <label for="">Fecha y Hora del Final del Programa:</label>
            <input class="form-control" type="datetime" name="end_date_and_time_of_the_program" id="" placeholder="Fecha y Hora del Final del Programa">
        </div>

        <div>
            <label for="">Canción de la semana:</label>
            <input class="form-control" type="text" name="Song_of_the_week" id="" placeholder="Canción de la semana">
        </div>

        <input class="btn btn-primary" type="submit" value="Guardar">

    </form>

</div>
