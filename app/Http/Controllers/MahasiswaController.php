<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Mahasiswa;
use DB;
use Excel;
use Input;
use Carbon;



class MahasiswaController extends Controller
{
	public function getMhs(){

$data = Mahasiswa::all();
        return view('vUser/student',compact('data'));
    }

    public function getData(){

    	$data = Mahasiswa::all();

    	return view('vMahasiswa/table',compact('data'));
    }

    public function add(Request $req){

    	$this->validate($req, [
    		'NPM' => 'required',
    		'Nama' => 'required',
    		'Email' => 'required',
            'TanggalMasuk' => 'required'

    	]);


    	$data = new Mahasiswa;
    	$data->NPM = $req->input('NPM');
    	$data->Nama = $req->input('Nama');
    	$data->Email = $req->input('Email');
        $data->TanggalMasuk = $req->input('TanggalMasuk');

    	$data->save();

    	  if(count($data) > 0){
    			return redirect('/admin/vMahasiswa/table')->with('info','Record Saved Successfully');
            } else {
                return view('vMahasiswa/create');
            }
    }

    public function update($ID){
    	$data = Mahasiswa::find($ID);

    	return view('vMahasiswa/update',['data' => $data]);
    }

    public function edit(Request $req,$ID){
    	$this->validate($req, [
    		'NPM' => 'required',
            'Nama' => 'required',
            'Email' => 'required',
            'TanggalMasuk' => 'required'
    	]);

    	$data = array(
    	'NPM'=> $req->input('NPM'),
        'Nama' => $req->input('Nama'),
        'Email'=> $req->input('Email'),
        'TanggalMasuk' => $req->input('TanggalMasuk'),
    	);

    	Mahasiswa::where('ID', $ID)->update($data);

    	  if(count($data) > 0){
    			return redirect('/admin/vMahasiswa/table')->with('info','Record Updated Successfully');
            } else {
                return view('vMahasiswa/update');
            }
    }

    public function read($ID){
    	$data = Mahasiswa::find($ID);

    	return view('vMahasiswa/read',['data' => $data]);
    }

    public function delete($ID){
    	Mahasiswa::where('ID', $ID)->delete();

    	 if(count($ID) > 0){
    			return redirect('/admin/vMahasiswa/table')->with('info','Record Deleted Successfully');
            } else {
                return view('vMahasiswa/table')->with('info','Record not Deleted');;
            }
    }

     public function downloadExcel($type)
    {
        $data = Mahasiswa::get()->toArray();
        return Excel::create('List Student', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

    public function importExcel(Request $req)
    {
       Mahasiswa::truncate();

        $this->validate($req, ['import_file' => 'required|mimes:xls,xlsx,csv']);

        if(Input::hasFile('import_file')){
            $path = Input::file('import_file')->getRealPath();
            $data = Excel::load($path, function($reader) {

            })->get();
            if(!empty($data) && $data->count()){
                foreach ($data as $key => $value) {
                    $insert[] = [

                    'NPM' => $value->npm,
                    'Nama' =>  $value->nama,
                    'Email' => $value->email,
                    'TanggalMasuk' => $value->tanggalmasuk

                ];}

                if(!empty($insert)){
                    DB::table('Mahasiswa')->insert($insert);
                return redirect('/admin/vMahasiswa/table')->with('info','Record Uploaded Successfully');
                }
            }
        }
        return back();
    }

}
