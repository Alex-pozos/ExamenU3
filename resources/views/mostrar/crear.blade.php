@extends('layout.plantilla')

@section('titulo', 'Crear libro')

@section('fondo')

    <div style="background: rgb(2, 54, 88)">

    @section('contenido')
        <div class="container">
            <div class="row m-3">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 m-3" style="background:rgb(0, 92, 95); border-radius:15px;">
                    <h1 class="display-6 text-center" style="color:whitesmoke">
                        Crear Registro de libro
                    </h1>
                    <form class="text-center m-3" action="{{ route('mostrar.store') }}" method="post">

                        @csrf

                        <div class="form-group m-1">
                            <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno">
                            <small style="color:whitesmoke">Apellido Paterno</small>
                        </div>
                        <div class="form-group m-1">
                            <input type="text" class="form-control" id="apellido_materno" name="apellido_materno">
                            <small style="color:whitesmoke">Apellido Materno</small>
                        </div>
                        <div class="form-group m-1">
                            <input type="text" class="form-control" id="nombre" name="nombre">
                            <small style="color:whitesmoke">Nombre</small>
                        </div>
                        <div class="form-group m-1">
                            <input type="date" class="form-control" id="fecha_de_nacimiento" name="fecha_de_nacimiento">
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
                            <input type="number" class="form-control" id="edad" name="edad" value="0" readonly>
                            <small style="color:whitesmoke">Edad</small>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-secondary"><i class="fas fa-cloud-upload-alt"></i>
                                    Guardar</button>
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
