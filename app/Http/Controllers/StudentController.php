<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carbon = Carbon::now();   
        $year = $carbon->year . $carbon->year + 1;
        // $campus = '01'; 
        // $id_jurusan = '1'; 
        // $peserta = '001'; 
        // $db = $year . '-' . $campus . '-' . $id_jurusan . $peserta; // misal kan ini data terakhir dari database

        // // urutan / pemformatan nomor peserta
        // $y = $carbon->year . $carbon->year + 1;
        // $t_campus = '01'; // d ambil dari table student column kampus ( where id = id dari form )
        // $t_jurusan = '1'; // d ambil dari value input jurusan
        // $ambil3string  = substr($db, -3); // ambil -3 karakter dari nomor peserta terakhir (db)
        // $format_no_peserta = $t_jurusan . $ambil3string; // rangkai no peserta 
        // $format_int = intval($format_no_peserta) + 1; // ubah string menjadi int dan di tambah 1
        // $insert = $y . '-' . $t_campus . '-' . $format_int; // format yang benar untuk di masukan ke db

        $t_jurusan =  6;
        $t_campus = DB::table('programs')->select('kampus')->where('id', 6)->get();
        $new = $year . '-'.  $t_campus[0]->kampus . '-' . $t_jurusan . '001' ;



        

        return view('administrator.all-data.index',[
            'students' => Student::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      

        return view('administrator.all-data.create',[
            'programs' => Program::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validated = $request->validate([
            'nama' => 'required',
            'nama_lengkap' => 'required',
            'tanggal_lahir' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'program_id' => 'required',
            'ukuran_baju' => 'required',
            'no_hp' => 'required',
            'anak_ke' => 'required',
            'alamat' => 'required',
            'nisn' => 'required',
            'nik' => 'required',
            'kk' => 'required',
            'kip' => 'required',
            'asal_sekolah' => 'required',
            'alamat_asal_sekolah' => 'required',
            'nomor_seri_ijazah' => 'required',
            'tgl_lulus' => 'required',
            'email' => 'required'
        ]);


        // ==== LANGKAH LOGIKA MEMBUAT NOMOR PESERTA ====

        // $t_campus = '01'; // d ambil dari table student column kampus ( where id = id dari form )
        // $t_jurusan = '1'; // d ambil dari value input jurusan
        // $ambil3string  = substr($last_student, -3); // ambil -3 karakter dari nomor peserta terakhir (db)
        // $format_no_peserta = $t_jurusan . $ambil3string; // rangkai no peserta 
        // $format_int = intval($format_no_peserta) + 1; // ubah string menjadi int dan di tambah 1
        // $insert = $year . '-' . $t_campus . '-' . $format_int; // format yang benar untuk di masukan ke db

        $t_campus = DB::table('programs')->select('kampus')->where('id', $request->program_id)->get();
        $carbon = Carbon::now();   
        $year = $carbon->year . $carbon->year + 1;
        $t_jurusan = $request->program_id;



        // untuk data pertama
        $cek = Student::first();
        if($cek == null){
            $validated['no_peserta'] = $year . '-'.  $t_campus[0]->kampus . '-' . $t_jurusan . '001' ;
        }else{
            $last_student = Student::all()->last();
            $last  = substr($last_student->no_peserta, -3);
            
            $t_campus = DB::table('programs')->select('kampus')->where('id', $request->program_id)->get();
            
            $format_no_peserta = $t_jurusan . $last;
            $format_int = intval($format_no_peserta) + 1;
            $insert = $year . '-' . $t_campus[0]->kampus . '-' . $format_int;
            $validated['no_peserta'] = $insert;
        }
        
          Student::create($validated);
          return redirect('/students')->with('success', 'New post has been added!');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('administrator.all-data.show',[
            'student' => $student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('administrator.all-data.form-edit',[
            'student' => $student,
            'programs' => Program::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nama_lengkap' => 'required',
            'tanggal_lahir' => 'required',
            'jk' => 'required',
            'agama' => 'required',
            'program_id' => 'required',
            'ukuran_baju' => 'required',
            'no_hp' => 'required',
            'anak_ke' => 'required',
            'alamat' => 'required',
            'nisn' => 'required',
            'nik' => 'required',
            'kk' => 'required',
            // 'kip' => 'required',
            'asal_sekolah' => 'required',
            'alamat_asal_sekolah' => 'required',
            'nomor_seri_ijazah' => 'required',
            'tgl_lulus' => 'required',
            'email' => 'required'
        ]);

        
        $carbon = Carbon::now();
        $year = $carbon->year . $carbon->year + 1;
        $t_campus = DB::table('programs')->select('kampus')->where('programId', $request->program_id)->get();
        $program = $request->program_id;
        $old_no_peserta = $student->no_peserta;
        $new_no_peserta  = substr($old_no_peserta, -3);
        $format_peserta = $program . $new_no_peserta;
        $update = $year . '-' . $t_campus[0]->kampus . '-' . $format_peserta;

        $validated['no_peserta'] = $update;
 
        Student::where('id', $student->id)->update($validated);
        return redirect('/students')->with('success', 'Data has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
