<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use App\Email;
use App\Municipality;
use App\State;
use App\Country;
use App\Headquarter;
use App\Classification;
use App\Phone;
use App\Parish;



class teachers extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('teacher/index');
    }

    public function create()
    {   
        $sedes = Headquarter::all();
        $paises = Country::all();
        $clasificaciones = Classification::all();
        $municipios = Municipality::all();
        $estados = State::all();
        $municipios = Municipality::all();
        $parroquias = Parish::all();




        return view('teacher/create')
        ->with('sedes',$sedes)
        ->with('clasificaciones',$clasificaciones)
        ->with('paises',$paises)
        ->with('estados',$estados)
        ->with('municipios',$municipios)
        ->with('parroquias',$parroquias);
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function show($id)
    {
        return view('teacher/show');
    }

    public function edit($id)
    {
        return view('teacher/edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
