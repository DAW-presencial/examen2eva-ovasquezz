<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tutores;

class TutoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('tutores.create');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tutores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'nombre_emp' =>'required',
            'tipo_identidad' =>'required',
            'nie_emp' =>'required',
            'nombre_tutor' =>'required',
            'apellido_tutor' =>'required',
            'apellido2_tutor' =>'required',
            'pais_doc_identidad' =>'required',
            'tlf_tutor' =>'required',
            'email'=>'required'
        ]);

        $contact = new Tutores([
            'nombre_emp' => $request->get('nombre_emp'),
            'tipo_identidad' => $request->get('tipo_identidad'),
            'nie_emp' => $request->get('nie_emp'),
            'nombre_tutor' => $request->get('nombre_tutor'),
            'apellido_tutor' => $request->get('apellido_tutor'),
            'apellido2_tutor' => $request->get('apellido2_tutor'),
            'pais_doc_identidad' => $request->get('pais_doc_identidad'),
            'provincia' => $request->get('provincia'),
            'municipio' => $request->get('municipio'),
            'estado_tutor' => $request->get('estado_tutor'),
            'tlf_tutor' => $request->get('tlf_tutor'),
            'email' => $request->get('email')
        ]);
        $contact->save();
        return redirect('/tutores')->with('success', 'Tutor saved!');

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
