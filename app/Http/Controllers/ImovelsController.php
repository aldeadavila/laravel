<?php

namespace App\Http\Controllers;

use App\Imovel;
use App\Foto;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImovelsController extends Controller
{

    public function __construct()
    {
       // $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $title = 'Mostrar Imoveis';

        // $imoveis = Imovel::paginate(4);
         $imoveis = Imovel::all();
       // return view('imovel.index', ['imoveis' => $imoveis, 'title' => $title]);
         return view('imovel.index')->with('imoveis', $imoveis)->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return 'crear nuevo imovel';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return 'almacenar imovel';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $imovel = Imovel::findOrFail($id);
        $fotos = Foto::where('imovel_id', $id)->get();

        //return $fotos;
        return view('imovel.show', compact('imovel', 'fotos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return 'editar imovel numero ' . $id;
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
        return 'actualizar imovel';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return 'eliminar imovel numero ' . $id;
    }
}
