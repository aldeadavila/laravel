<?php

namespace App\Http\Controllers;

use App\imovel;
use App\foto;
use DB;
use Carbon\Carbon;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImovelsController extends Controller
{

    /*Recupera con elocuent las fotos de una inmueble App\Imovel::find(7)->fotos()->get()*/

    public function __construct()
    {
       //$this->request->$request;
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
         $imoveis = Imovel::all()->first()->get();
         $cajas = "hola para ti mi cola";
        // $fotaza = Foto::where('imovel_id', '=', '1')->first();
        // $fotaza = Foto::first()->get();
       // return view('imovel.index', ['imoveis' => $imoveis, 'title' => $title]);
        //return view('imovel.index',['imoveis' => $imoveis, 'title' => $title, 'fotos' => $fotos]);
        return view('imovel.index')
        ->with('cajas', $cajas)
        ->with('imoveis' , $imoveis);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imovel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $input = Request::all();
        $input['created_at'] = Carbon::now();
        $input['update_at'] = Carbon::now();
        $input['user_id'] = 1;
        Imovel::create($input);

        return redirect('imoveis');
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
