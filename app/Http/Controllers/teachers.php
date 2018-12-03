<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TeacherRequest;
use App\Teacher;
use App\Email;
use App\State;
use App\Country;
use App\Headquarter;
use App\Classification;
use App\Phone;



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

        return view('teacher/create')
        ->with('sedes',$sedes)
        ->with('clasificaciones',$clasificaciones)
        ->with('paises',$paises)
        ->with('estados',$estados);
    }

    public function store(TeacherRequest $request)
    {
        $profesor = Teacher::create([
            'first_name'    =>  $request->first_name,
            'last_name'     =>  $request->last_name,
            'identity'      =>  $request->identity,
            'birthdate'     =>  $request->birthdate,
            'address'       =>  $request->address,
            'countrie_id'   =>  $request->countrie_id,
            'classification_id'    =>  $request->classification_id,
            'headquarters_id'      =>  $request->headquarters_id,
            'status'        =>  $request->status,
            'observation'   =>  $request->observation,
            'state_id'      =>  $request->state_id,
        ]);

        if (!empty($request->phone1)) {
            $type = "movil";
            $telefono= Phone::create([
                'type'  =>  $type,
                'number'    =>  $request->phone1,
                'teacher_id'    => $profesor->id
            ]); 
        }

        if (!empty($request->phone2)) {
            $type = "casa";
            $telefono= Phone::create([
                'type'  =>  $type,
                'number'    =>  $request->phone2,
                'teacher_id'    => $profesor->id
            ]); 
        }

        if (!empty($request->email1)) {
            $correo= Email::create([
                'email'    =>  $request->email1,
                'teacher_id'    => $profesor->id
            ]); 
        }

        if (!empty($request->email2)) {
            $correo= Email::create([
                'email'    =>  $request->email2,
                'teacher_id'    => $profesor->id
            ]); 
        }

        return back()->with('info','Se ha registrado de manera exitosa!');


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
