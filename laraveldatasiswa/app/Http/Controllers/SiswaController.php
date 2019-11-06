<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use PDF;

class SiswaController extends Controller
{
    public function index(){

    	$data_siswa = \App\Siswa::all();

    	return view('siswa.index', ['data_siswa' => $data_siswa]);
    }

    public function create(Request $request){

    		
            $user = new \App\User;
            $user->role = 'siswa';
            $user->name = $request->nama_depan;
            $user->email = $request->email;
            $user->password = bcrypt ('rahasia');
            $user->save();


            $request->request->add(['user_id' => $user->id]);

            $siswa = \App\Siswa::create($request->all());
    		return redirect('/siswa')->with('sukses', 'Berhasil');

    }

    public function edit($id){
    	$siswa = \App\Siswa::find($id);
    	return view('siswa/edit', ['siswa' => $siswa]);
    }

    public function update(Request $request, $id){

    	$siswa = \App\Siswa::find($id);
    	$siswa->update($request->all());
    	return redirect('/siswa')->with('sukses', 'Data Berhasil diupdate');

    }

    public function delete($id){
        $siswa = \App\Siswa::find($id);
        $siswa->delete($siswa);
        return redirect('/siswa')->with('sukses', 'Data Berhasil dihapus');
    }

public function exportexcel(){
    return Excel::download(new SiswaExport, 'Siswa.xlsx');
}

public function exportPdf(){
    $siswa = \App\Siswa::all();
    $pdf = PDF::loadView('export.siswapdf',['siswa' => $siswa]);
    return $pdf->download('siswa.pdf');
}
}
