<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dosen', function () 
{
    $dosens = ["Saman","Acih","Aan","Dede","Hilman","Geri","Christa","Kusmayanti","Ghazali","Bram"];
    $pelajaran = ["Cloud Computing","Framework","PBM","Struktur Data","ALjabar Linear","Fisika","B.Inggris","Pancasila","B.indonesia","Pendidikan Agama"];
    return view('dosen.dosen')->with('dosens',$dosens)
    ->with('pelajaran',$pelajaran);
}); 
Route::get('/mahasiswa', function ()
{
    $siswas = ["Umi Fifa Latifah","Andrian Nurian","Zahra","Ray Rizki","Lily","Adrian Wibisono","Wildi Baydowi","Dewi Anjani","Ade Suparlan","Riri Rizqiah"];
    $nim = ["20036","20032","20018","20047","20118","20056","20078","20185","20112","20015"];
    return view('mahasiswa.mahasiswa')->with('siswas',$siswas)
    ->with('nim',$nim);
});
Route::get('/matakuliah', function ()
 {
    $matkuls = ["Cloud Computing","Framework","PBM","Struktur Data","Aljabar Linear","Fisika","B.Inggris","Pancasila","B.Indonesia","Pendidikan Agama"];
    $semester = ["5","5","5","2","1","1","1","3","2","3"];
    return view('matakuliah.matakuliah')->with('matkuls',$matkuls)
    ->with('semester',$semester);

});