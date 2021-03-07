<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class="container">

<br>
<br>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="card-title"><p>Programa: {{ $radio->program_name }}</p></h2>
                </div>
                    <div class="col-md-4">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-primary" href="{{route('radios.index')}}"><- Volver</a>
                        </div>
                    </div>
                </div>
        </div>
    <div class="card-body">

        <table class="table table-dark table-striped">

                <thead>
                    <tr>
                       
                        <th>Tema</th>
                        <th>Locutor Asignado</th>
                        <th>Locutores Invitados</th>
                        <th>Fecha y Hora de Inicio del Programa</th>
                        <th>Fecha y Hora de Final del Programa</th>
                        <th>Cancion de la Semana</th>
                       
                    </tr>
                </thead>

                <tbody>
               
                    <tr>
                      
                        <td><p>{{$radio->topic}}</p></td>
                        <td><p>{{ $radio->assigned_announcer}}</p></td>
                        <td>
                            <p><b>Locutor Invitado 1:</b>{{ $radio->invited_announcer_1}}</p>
                            <p><b>Locutor Invitado 2:</b>{{ $radio->invited_announcer_2 }}</p>
                            <p><b>Locutor Invitado 3:</b>{{ $radio->invited_announcer_3 }}</p>
                            <p><b>Locutor Invitado 4:</b>{{ $radio->invited_announcer_4 }}</p>
                        </td>
                        <td><p>{{$radio->program_start_date_and_time}}</p></td>
                        <td><p>{{$radio->end_date_and_time_of_the_program}}</p></td>
                        <td><p>{{$radio->song_of_the_week}}</p></td>
   
                    </tr>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <div class="col">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" href="{{route('radios.edit', $radio->id)}}">Editar</a>
                <a class="btn btn-danger" href="{{route('radios.destroy', $radio->id)}}">Eliminar</a>
             </div>
        </div>
    </div>
</div>