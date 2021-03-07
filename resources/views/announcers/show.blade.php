<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class="container">

<br>
<br>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="card-title"><p>{{ $announcer->first_name}}</p></h2>
                </div>
                    <div class="col-md-4">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-primary" href="{{route('announcers.index')}}"><- Volver</a>
                        </div>
                    </div>
                </div>
        </div>
    <div class="card-body">

        <table class="table table-dark table-striped">

                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha y Hora de Entrada</th>
                        <th>Fecha y Hora de Salida</th>
                        <th>Minutos en Cabina</th>

                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>

                            <p><b>Segundo nombre:</b>{{ $announcer->second_name }}</p>
                            <p><b>Apellido Paterno:</b>{{ $announcer->last_name }}</p>
                            <p><b>Apellido Materno:</b>{{ $announcer->mothers_last_name }}</p>
                        </td>
                        <td><p>{{ $announcer->date_and_time_of_entry }}</p></td>
                        <td><p>{{$announcer->date_and_time_of_departure}}</p></td>
                        <td><p>{{ $announcer->minutes_in_the_cabin}}</p></td>
 
                    </tr>

            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <div class="col">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" href="{{route('announcers.edit', $announcer->id)}}">Editar</a>
                <a class="btn btn-danger" href="{{route('announcers.destroy', $announcer->id)}}">Eliminar</a>
             </div>
        </div>
    </div>
</div>