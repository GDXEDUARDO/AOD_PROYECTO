<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class ="container">
    <h1>Locutores:</h1>

    <form action="{{ route('announcers.store') }}" method="post">

        @csrf

        <div>
            <label for="">Primer Nombre:</label>
            <input class="form-control" type="text" name="first_name" id="" placeholder="Primer Nombre:">
        </div>

        <div>
            <label for="">Segundo Nombre:</label>
            <input class="form-control" type="text" name="second_name" id="" placeholder="Segundo Nombre">
        </div>

        <div>
            <label for="">Apellido Paterno:</label>
            <input class="form-control" type="text" name="last_name" id="" placeholder="Apellido Paterno">
        </div>

        <div>
            <label for="">Apellido Materno:</label>
            <input class="form-control" type="text" name="mothers_last_name" id="" placeholder="Apellido Materno">
        </div>

        <div>
            <label for="">Fecha y Hora de entrada:</label>
            <input class="form-control" type="datetime" name="date_and_time_of_entry" id="" placeholder="Fecha y Hora de entrada">
        </div>

        <div>
            <label for="">Fecha y Hora de salida:</label>
            <input class="form-control" type="datetime" name="date_and_time_of_departure" id="" placeholder="Fecha y Hora de salida">
        </div>

        <div>
            <label for="">Minutos en Cabina:</label>
            <input class="form-control" type="number" name="minutes_in_the_cabin" id="" placeholder="Minutos en Cabina">
        </div>

        <input class="btn btn-primary" type="submit" value="Guardar">

    </form>

</div>
