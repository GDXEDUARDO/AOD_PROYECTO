<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class="container">

<br>
<br>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="card-title"><p>{{ $parking->brand }}</p></h2>
                </div>
                    <div class="col-md-4">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-primary" href="{{route('parkings.index')}}"><-Volver</a>
                        </div>
                    </div>
                </div>
        </div>
    <div class="card-body">

        <table class="table table-dark table-striped">

                <thead>
                    <tr>
                        <th>Matricula</th>
                        <th>Marca</th>
                        <th>Descripción</th>
                        <th>Fecha y Hora de Entrada</th>
                        <th>Fecha y Hora de Salida</th>
                        <th>Información</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td><p>{{ $parking->matricule }}</p></td>
                        <td><p>{{ $parking->brand }}</p></td>
                        <td><p>{{ $parking->description }}</p></td>
                        <td><p>{{ $parking->date_and_time_of_entry }}</p></td>
                        <td><p>{{$parking->date_and_time_of_departure}}</p></td>
                        <td>
                            <p><b>Modelo:</b>{{ $parking->model}}</p>
                            <p><b>Color:</b>{{ $parking->color}}</p>
                            <p><b>Número de Puertas:</b>{{ $parking->num_doors}}</p>
                            <p><b>Nombre del conductor:</b>{{ $parking->drivers_name}}</p>
                        </td>
                       
                    </tr>
            </tbody>
        </table>
    </div>
    <div class="card-footer">
        <div class="col">
            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a class="btn btn-primary" href="{{route('parkings.edit', $parking->id)}}">Editar</a>
                <a class="btn btn-danger" href="{{route('parkings.destroy', $parking->id)}}">Eliminar</a>
             </div>
        </div>
    </div>
</div>