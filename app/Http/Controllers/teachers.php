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
        $teachers = Teacher::all();
        $i = 1;
        return view('teacher/index', [
            'teachers' => $teachers,
            'i' => $i,
        ]);
    }

    public function create()
    {   
        $sedes = Headquarter::all();
        $paises = Country::all();
        $clasificaciones = Classification::all();
        $estados = State::all();

        return view('teacher.create')
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
            'headquarter_id'      =>  $request->headquarters_id,
            'status'        =>  $request->status,
            'observation'   =>  ($request->observation)?$request->observation:'NULL',
            'state_id'      =>  $request->state_id,
            'municipality_id'      =>  $request->municipality_id,
            'parish_id'     =>  $request->parish_id,
        ]);
        
        for ($i=1; $i < 3; $i++) { 
            if (!empty($request->input('phone'.$i))) {
                $telefono= Phone::create([
                    'type'  =>  ($i == 1)?'MOVIL':'CASA',
                    'number'    =>  ($i == 1)?$request->phone1:$request->phone2,
                    'teacher_id'    => $profesor->id
                ]);
            }
        }
        
        for ($e=0; $e < 3; $e++) { 
            if (!empty($request->input('email'.$e))) {
                $correo= Email::create([
                    'email'    =>  ($e == 1)?$request->email1:$request->email2,
                    'teacher_id'    => $profesor->id
                ]); 
            }
        }

        return back()->with('info','Se ha registrado de manera exitosa!');
    }

    public function show()
    {
        return view('teacher.show');
    }

    public function edit($id)
    {
        // dd($teacher->id);
        $teacher = Teacher::find($id);
        $sedes = Headquarter::all();
        $paises = Country::all();
        $clasificaciones = Classification::all();
        $estados = State::all();
        $phones = Phone::where('teacher_id', $teacher->id);
        $emails = Email::where('teacher_id', $teacher->id);
        $i = 0;
        $h = 0;

        return view('teacher.edit')
        ->with('i',$i)
        ->with('h',$h)
        ->with('sedes',$sedes)
        ->with('clasificaciones',$clasificaciones)
        ->with('paises',$paises)
        ->with('estados',$estados)
        ->with('phones',$phones)
        ->with('emails',$emails)
        ->with('teacher', $teacher);
    }

    public function update(TeacherRequest $request,$id)
    {
        $teacher = Teacher::find($id);

        $profesor = Teacher::update([
            'first_name'    =>  ($request->first_name)?$request->first_name:$teacher->first_name,
            'last_name'     =>  ($request->last_name)?$request->last_name:$teacher->last_name,
            'identity'      =>  ($request->identity)?$request->identity:$teacher->identity,
            'birthdate'     =>  ($request->birthdate)?$request->birthdate:$teacher->birthdate,
            'address'       =>  ($request->address)?$request->address:$teacher->address,
            'countrie_id'   =>  ($request->countrie_id)?$request->countrie_id:$teacher->countrie_id,
            'classification_id'    =>  ($request->classification_id)?$request->classification_id:$teacher->classification_id,
            'headquarters_id'      =>  ($request->headquarters_id)?$request->headquarters_id:$teacher->headquarters_id,
            'status'        =>  ($request->status)?$request->status:$teacher->status,
            'observation'   =>  ($request->observation)?$request->observation:$teacher->observation,
            'state_id'      =>  ($request->state_id)?$request->state_id:$teacher->state_id,
        ]);


    }

    public function destroy($id)
    {
        //
    }
}
