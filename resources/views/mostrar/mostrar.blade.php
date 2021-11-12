@extends('layout.plantilla')

@section('titulo', 'Mostrar datos ' . $persona->nombre)

@section('fondo')

    <div style="background: rgb(2, 54, 88)">

    @section('contenido')

        <div class="container">
            <div class="row m-3">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-header text-center">
                            <p style="font-size: 30px">
                                Ficha del usuario <br>
                                "{{ $persona->nombre }}"
                            </p>
                        </div>
                        <div class="card-body">
                            <p class="lead">Nombre: {{ $persona->nombre }}</p>
                            <p class="lead">Apellido Paterno: {{$persona->apellido_paterno}}</p>
                            <p class="lead">Apellido Materno: {{$persona->apellido_materno}}</p>
                            <p class="lead">Fecha de Nacimiento: {{ $persona->fecha_de_nacimiento }}</p>
                            <p class="lead">Sexo: {{ $persona->sexo }}</p>
                            <p class="lead">Edad: {{ $persona->edad }}</p>
                            <a href="/" class="btn btn-primary"><i class="fas fa-chevron-left"></i> Regresar a libros</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
    </div>


@endsection
</div>

@endsection
