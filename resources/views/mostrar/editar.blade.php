@extends('layout.plantilla')

@section('titulo', 'Editar persona')

@section('fondo')

    <div style="background: rgb(2, 54, 88)">

    @section('contenido')
        <div class="container">
            <div class="row m-3">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 m-3" style="background:rgb(0, 92, 95); border-radius:15px;">
                    <h1 class="display-6 text-center" style="color:whitesmoke">
                        Editar Registro de usuario
                    </h1>
                    <form class="text-center m-3" action="{{ route('mostrar.actualizar', $persona)}}" method="post">

                        @csrf

                        @method('put')

                        <div class="form-group m-1">
                            <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" value="{{$persona->apellido_paterno}}">
                            <small style="color:whitesmoke">Apellido Paterno</small>
                        </div>
                        <div class="form-group m-1">
                            <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" value="{{$persona->apellido_materno}}">
                            <small style="color:whitesmoke">Apellido Materno</small>
                        </div>
                        <div class="form-group m-1">
                            <input type="text" class="form-control" id="nombre" name="nombre" value="{{$persona->nombre}}">
                            <small style="color:whitesmoke">Nombre</small>
                        </div>
                        <div class="form-group m-1">
                            <input type="date" class="form-control" id="fecha_de_nacimiento" name="fecha_de_nacimiento" value="{{$persona->fecha_de_nacimiento}}">
                            <small style="color:whitesmoke">Fecha de Nacimiento</small>
                        </div>
                        <div class="form-group m-1">
                            <select class="form-control" id="sexo" name="sexo">
                                <option value="masculino">Masculino</option>
                                <option value="femenino">Femenino</option>
                                <option value="n/a">Prefiero no decirlo</option>
                            </select>
                            <small style="color:whitesmoke">Selecione su sexo</small>
                        </div>
                        <div class="form-group m-1">
                            <input type="number" class="form-control" id="edad" name="edad" value="<?php
                            $fecha_de_nacimiento = new DateTime($persona['fecha_de_nacimiento']);
                            $hoy = new DateTime();
                            $edad = $hoy->diff($fecha_de_nacimiento);
                            echo $edad->y;
                            ?>" readonly>
                            <small style="color:whitesmoke">Edad</small>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-secondary"><i class="far fa-edit"></i>
                                    Actualizar</button>
                            </div>
                            <div class="col-sm-6">
                                <a href="/" class="btn btn-primary"><i class="fas fa-chevron-left"></i> Regresar </a>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>


    @endsection
</div>

@endsection
