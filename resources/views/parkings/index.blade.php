<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">

<div class="container">

<br>
<br>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="card-title">Listado de veiculos que ingresan a bodega</h2>
                </div>
                    <div class="col-md-4">
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a class="btn btn-primary" href="{{route('parkings.create')}}">+ Nuevo</a>
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
                @forelse($parkings as $parking)
                    <tr>
                        <td><p class="text-uppercase">{{ $parking->matricule }}</p></td>
                        <td>
                            <a class="btn btn-info btn-small" href="{{route('parkings.show', $parking->id)}}">
                            <p>{{ $parking->brand }}</p>
                        </td>
                        <td><p>{{ $parking->description }}</p></td>
                        <td><p>{{ $parking->date_and_time_of_entry }}</p></td>
                        <td><p>{{$parking->date_and_time_of_departure}}</p></td>
                        <td>
                            <p><b>Modelo:</b>{{ $parking->model}}</p>
                            <p><b>Color:</b>{{ $parking->color}}</p>
                            <p><b>Número de Puertas:</b>{{ $parking->num_doors}}</p>
                            <p><b>Nombre del conductor:</b>{{ $parking->drivers_name}}</p>
                        </td>

                @empty
                    <h1>La tabla no tiene datos :'c</h1>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>