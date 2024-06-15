<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Http\Requests\CreateServicioRequest;

class ServiciosController extends Controller
{
    public function index()
    {
        $servicios = Servicio::orderBy('titulo', 'asc')->get();

        return view('servicios', compact('servicios'));
    }

    public function show($id){
        return view('show',[
            'servicio' => Servicio::find($id)
        ]);
    }

    #Agregué hoy viernes 14/06/2024 (semana 6)
    public function create(){
        return view('create');
    }

    public function store(CreateServicioRequest $request){
        
        Servicio::create($request->validated());
        return redirect()->route('servicios.index');
    }
}
