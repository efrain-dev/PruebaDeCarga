@extends('layuot')

@section('contenido')
    <div class="container">
        <h1>DETALLE DE ENTRADA NO {{$id}}</h1>
        <table>
            <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Campo</th>

            </tr>
            </thead>
            <tbody>
            @foreach($carga as $item)
                <tr>
                    <th scope="row">{{$item->codigo_entrada}}</th>
                    <td>{{$item->descripcion}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

    </div>
@endsection
