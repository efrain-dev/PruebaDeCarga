@extends('layuot')

@section('contenido')
    <div class="container">
        <h1>CARGA de Registro de entrada No. {{$entrada->codigo_entrada}}</h1>
        <form action="{{route('guardar.carga-entrada',$entrada)}}" method="post">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Descripcion</span>
                <input type="text" class="form-control" name="descripcion" placeholder="Campo" aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <div class="text-center">
                <input type="submit" class="form-control btn btn-success" >
            </div>

        </form>

    </div>
@endsection
