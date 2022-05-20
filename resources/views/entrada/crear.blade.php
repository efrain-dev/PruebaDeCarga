@extends('layuot')

@section('contenido')
    <div class="container">
        <h1>ENTRADA</h1>

        <form action="{{route('guardar.entrada')}}" method="post">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Campo</span>
                <input type="text" class="form-control" name="campo" placeholder="Campo" aria-label="Username" aria-describedby="basic-addon1">
            </div>


            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Fecha</span>
                <input type="date" class="form-control" name="fecha" placeholder="Campo" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="text-center">
                <input type="submit" class="form-control btn btn-success" >
            </div>

        </form>

    </div>
@endsection
