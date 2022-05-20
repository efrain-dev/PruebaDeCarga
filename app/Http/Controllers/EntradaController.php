<?php

namespace App\Http\Controllers;

use App\Models\Carga;
use App\Models\EntradaSalida;
use Illuminate\Http\Request;

class EntradaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrada = EntradaSalida::where('tipo','E')->get();
        return  view('entrada.index',compact('entrada'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('entrada.crear');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['tipo'] = "E";
        $entrada = EntradaSalida::create($data);
        return  view('entrada.carga',compact('entrada'));
    }
    public function guardarCarga(Request $request,$entrada)
    {
        $data = $request->all();
        $data['codigo_entrada'] = $entrada;
         Carga::create($data);
        return  redirect()->route('entrada.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function verCarga($id)
    {
        $carga = Carga::where('codigo_entrada',$id)->get();
        return view('entrada.show',compact('carga','id'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
