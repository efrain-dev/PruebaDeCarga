@extends('layuot')

@section('contenido')
    <div class="container">
        <h1>ENTRADAS</h1>
        <a class="btn btn-success" href="{{route('crear')}}">Crear</a>
        <table>
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Campo</th>
                <th scope="col">Acciones</th>

            </tr>
            </thead>
            <tbody>
            @foreach($entrada as $item)
                <tr>
                    <th scope="row">{{$item->codigo_entrada}}</th>
                    <td>{{$item->campo}}</td>
                    <td><a href="{{route('entrada.ver-carga',$item->codigo_entrada)}}" class="btn btn-warning"> <li class="fas fas-eye"></li></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
