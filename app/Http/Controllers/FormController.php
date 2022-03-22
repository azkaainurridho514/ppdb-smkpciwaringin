<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Select;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('administrator.form.index', [
            'form' => Form::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrator.form.create',['form' => Form::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = Form::all();
        $rules = [];
        foreach($input as $i){
           $rule[$i->nameInput] = $i->validates->validate;
           array_push($rules, $rule);
        }

        $last_object = end($rules);
        $new = (array)$last_object;
        $validated = $request->validate($new); // resolve
        $t_campus = DB::table('programs')->select('kampus')->where('id', $request->programId)->get();
        $carbon = Carbon::now();   
        $year = $carbon->year . $carbon->year + 1;
        $t_jurusan = $request->programId;



        // // untuk data pertama
        $cek = Student::first();
        if($cek == null){
            $validated['no_peserta'] = $year . '-'.  $t_campus[0]->kampus . '-' . $t_jurusan . '001' ;
        }else{
            $last_student = Student::all()->last();
            $last  = substr($last_student->no_peserta, -3);
            
            $t_campus = DB::table('programs')->select('kampus')->where('programId', $request->programId)->get();
            
            $format_no_peserta = $t_jurusan . $last;
            $format_int = intval($format_no_peserta) + 1;
            $insert = $year . '-' . $t_campus[0]->kampus . '-' . $format_int;
            $validated['no_peserta'] = $insert;
        }
        
        //   Student::create($validated);
        //   return redirect('/forms')->with('success', 'New post has been added!');
        return $validated;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(Form $form)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $form)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $form)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //
    }
}
