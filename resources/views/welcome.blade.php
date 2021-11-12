@extends('layout.plantilla')

@section('titulo', 'Registros')

@section('fondo')

    <div style="background: rgb(2, 54, 88)">

    @section('contenido')

        <div class="container">
            <div class="row m-3">
                <div class="col">

                    <h1 class="display-5 text-center" style="color:deepskyblue">Lista de Personas <i
                            class="fas fa-book"></i></h1>
                    <div class="container">
                        <div class="row m-3">
                            <div class="col-sm-3"><a href="{{ route('mostrar.crear') }}"
                                    class="btn btn-success btn-lg"><i class="fas fa-plus"></i> Agregar registro</a></div>
                            <div class="col-sm-4"></div>
                            <div class="col-sm-3">{{ $personas->links() }}</div>
                            <div class="col-sm-2">

                            </div>
                        </div>
                    </div>
                    <table class="table clase_table text-center" style="color:deepskyblue">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Apellido Paterno</th>
                                <th scope="col">Apellido Materno</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Fecha de Nacimiento</th>
                                <th scope="col">Sexo</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Ver</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($personas as $persona)
                                <tr>
                                    <td><strong>{{ $persona->id }}</strong></td>
                                    <td>{{ $persona->apellido_paterno }}</td>
                                    <td>{{ $persona->apellido_materno }}</td>
                                    <td>{{ $persona->nombre }}</td>
                                    <td>{{ $persona->fecha_de_nacimiento }}</td>
                                    <td>{{ $persona->sexo }}</td>
                                    <td>
                                        <?php
                                        $fecha_de_nacimiento = new DateTime($persona['fecha_de_nacimiento']);
                                        $hoy = new DateTime();
                                        $edad = $hoy->diff($fecha_de_nacimiento);
                                        echo $edad->y;
                                        ?>
                                    </td>
                                    <td>
                                        <a href="{{ route('mostrar.mostrar', $persona->id) }}" class="btn btn-success">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('mostrar.editar', $persona->id) }}" class="btn btn-warning">
                                            <i class="far fa-edit"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('mostrar.eliminar', $persona) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

    @endsection
</div>

@endsection
