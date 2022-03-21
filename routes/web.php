<?php

use App\Models\User;
use App\Models\Program;
use App\Models\Student;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\NewRegistrantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// user
Route::get('/', function () {
    return view('home.index');
});
Route::get('/peserta-didik-baru', function(){
    return view('home.baru', [
        'programs' => Program::all(),
        'form' => Form::all()
    ]);
});
Route::post('/peserta-didik-baru', function(Request $request){

    // $t_campus = DB::table('programs')->select('kampus')->where('id', $request->program_id)->get();
    // $c = ' - ' . $t_campus[0]->kampus . '-';
    // dd($c);
    // $validated = $request->validate([
    //     'nama' => 'required',
    //     'nama_lengkap' => 'required',
    //     'tanggal_lahir' => 'required',
    //     'jk' => 'required',
    //     'agama' => 'required',
    //     'program_id' => 'required',
    //     'ukuran_baju' => 'required',
    //     'no_hp' => 'required',
    //     'anak_ke' => 'required',
    //     'alamat' => 'required',
    //     'nisn' => 'required',
    //     'nik' => 'required',
    //     'kk' => 'required',
    //     'kip' => 'required',
    //     'asal_sekolah' => 'required',
    //     'alamat_asal_sekolah' => 'required',
    //     'nomor_seri_ijazah' => 'required',
    //     'tgl_lulus' => 'required',
    //     'email' => 'required'
    // ]);
    

    // $t_campus = DB::table('programs')->select('kampus')->where('id', $request->program_id)->get();
    // $carbon = Carbon::now();   
    // $year = $carbon->year . $carbon->year + 1;
    // $t_jurusan = $request->program_id;

    // // untuk data pertama
    // $cek = Student::first();
    // if($cek == null){
    //     $validated['no_peserta'] = $year . '-'.  $t_campus[0]->kampus . '-' . $t_jurusan . '001' ;
    // }else{
    //     $last_student = Student::all()->last();
    //     $last  = substr($last_student->no_peserta, -3);
        
    //     $t_campus = DB::table('programs')->select('kampus')->where('id', $request->program_id)->get();
        
    //     $format_no_peserta = $t_jurusan . $last;
    //     $format_int = intval($format_no_peserta) + 1;
    //     $insert = $year . '-' . $t_campus[0]->kampus . '-' . $format_int;
    //     $validated['no_peserta'] = $insert;
    // }

    //   Student::create($validated);
    //   return redirect('/')->with('success', 'Data berhasil di tambahkan!');




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

    return $validated; // lanjut proses insert




});

// admin
Route::resource('/students', StudentController::class);

Route::resource('/programs', ProgramController::class);

Route::resource('/forms', FormController::class);

Route::get('/list', function(){
    return view('administrator.all-data.listbyprogram.index', [ 'programs' => Program::all() ]);
});

Route::get('/list/{program:slug}', function(Program $program){
    return view('administrator.all-data.listbyprogram.show', ['students' => Student::latest()->where('program_id', $program)->get()]);
});
