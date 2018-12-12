<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TeacherRequest;
use App\Http\Requests\UpdateRequest;
use App\Teacher;
use App\Email;
use App\State;
use App\Country;
use App\Headquarter;
use App\Classification;
use App\Phone;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $teachers = Teacher::paginate(5);
        $sedes = Headquarter::all();
        $paises = Country::all();
        $clasificaciones = Classification::all();
        $estados = State::all();
        // contadores
        $i = 1;
        return view('teacher/index')
            ->with('sedes',$sedes)
            ->with('clasificaciones',$clasificaciones)
            ->with('paises',$paises)
            ->with('estados',$estados)
            ->with('i',$i)
            ->with('teachers', $teachers);
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
        $teacher = Teacher::find($id);
        $sedes = Headquarter::all();
        $paises = Country::all();
        $clasificaciones = Classification::all();
        $estados = State::all();
        $count_phones = $teacher->phones->count();
        $count_emails = $teacher->emails->count();
        // contadores
        $i = 1;
        // dd($count_emails);

        return view('teacher.edit')
            ->with('count_phones',$count_phones)
            ->with('count_emails',$count_emails)
            ->with('sedes',$sedes)
            ->with('clasificaciones',$clasificaciones)
            ->with('paises',$paises)
            ->with('estados',$estados)
            ->with('i',$i)
            ->with('teacher', $teacher);
    }

    public function update(UpdateRequest $request,$id)
    {
        $teacher = Teacher::find($id);
        $telefonos = Phone::where('teacher_id',$id);
        $correos = Email::where('teacher_id',$id);

        $teacher->update([
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
            // 'municipality_id'      =>  ($request->municipality_id)?$request->municipality_id:$teacher->municipality_id,
            // 'parish_id'     =>  ($request->parish_id)?$request->parish_id:$teacher->parish_id,
        ]);

        foreach ($telefonos as $indice => $telefono) {
            dd($telefono);
        }

        // UPDATE PHONE
        if ($telefono->count() == 2) {
            for ($i=1; $i < 3; $i++) {
                $telefono->update([
                    'number' => ($i == 1)?$request->phone1:$request->phone2,
                ]);
            }
        }elseif($telefono->first()->number != $request->phone1){
            $telefono->update([
                'number' => $request->phone1,
            ]);
            if ($telefono->first()->number != $request->phone2) {
                $telefono->update([
                    'number' => $request->phone2,
                ]);
            }
        }

        // UPDATE EMAIL
        if ($correo->count() == 2) {
            for ($i=1; $i < 3; $i++) {
                $correo->update([
                    'email' => ($i == 1)?$request->email1:$request->email2,
                ]);
            }
        }elseif($correo->first()->email != $request->email1){
            $correo->update([
                'email' => $request->email1,
            ]);
            if ($correo->first()->email!= $request->email2) {
                $correo->update([
                    'email' => $request->email2,
                ]);
            }
        }

        return back()->with('info','Se ha modificado de manera exitosa!');
    }

    public function destroy($id)
    {
        //
    }
}
