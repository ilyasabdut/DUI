<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Dosen;
use DB;
use Excel;
use Input;
use Carbon;
use Storage;
use Image;




class DosenController extends Controller
{
	public function getDsn(){

        $data = Dosen::orderBy('NIDN', 'asc')->get();
        return view('vUser/lecturer',compact('data'));
    }

    public function getData(){

    	$data = Dosen::orderBy('ID', 'asc')->paginate(5);

    	return view('vDosen/table',compact('data'));
    }

    public function add(Request $req){

    	$this->validate($req, [
    		'NIDN' => 'required',
    		'Nama' => 'required',
    		'Email' => 'required',

    	]);


    	$data = new Dosen;
    	$data->NIDN = $req->input('NIDN');
    	$data->Nama = $req->input('Nama');
    	$data->Email = $req->input('Email');

			// Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
			$file       = $req->file('image');
			$fileName   = $file->getClientOriginalName();
			$req->file('image')->move("image/", $fileName);

			$data->gambar = $fileName;

    	$data->save();

    	  if(count($data) > 0){
    			return redirect('/admin/vDosen/table')->with('info','Record Saved Successfully');
            } else {
                return view('vDosen/create');
            }
    }

    public function update($ID){
    	$data = Dosen::find($ID);

    	return view('vDosen/update',['data' => $data]);
    }

    public function edit(Request $req,$ID){
    	$this->validate($req, [
    		'NIDN' => 'required',
            'Nama' => 'required',
            'Email' => 'required',
    	]);

    	$data = array(
    		'NIDN'=> $req->input('NIDN'),
       	 	'Nama' => $req->input('Nama'),
        	'Email'=> $req->input('Email')

    	);




    	Dosen::where('ID', $ID)->update($data);

    	  if(count($data) > 0){
    			return redirect('/admin/vDosen/table')->with('info','Record Updated Successfully');
            } else {
                return view('vDosen/update');
            }
    }

    public function read($ID){
    	$data = Dosen::find($ID);

    	return view('vDosen/read',['data' => $data]);
    }

    public function delete($ID){
    	Dosen::where('ID', $ID)->delete();

    	 if(count($ID) > 0){
    			return redirect('/admin/vDosen/table')->with('info','Record Deleted Successfully');
            } else {
                return view('vDosen/table')->with('info','Record not Deleted');;
            }
    }

     public function downloadExcel($type)
    {
        $data = Dosen::get()->toArray();
        return Excel::create('List Lecturer', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

    public function importExcel(Request $req)
    {
        $this->validate($req, ['import_file' => 'required|mimes:xls,xlsx,csv']);

        if(Input::hasFile('import_file')){
            $path = Input::file('import_file')->getRealPath();
            $data = Excel::load($path, function($reader) {

            })->get();
            if(!empty($data) && $data->count()){
                foreach ($data as $key => $value) {
                    $insert[] = [

                    'NIDN' => $value->nidn,
                    'Nama' =>  $value->nama,
                    'Email' => $value->email,
                    'Gambar' => $value->gambar

                ];
                }

                if(!empty($insert)){
                    DB::table('Dosen')->insert($insert);
                return redirect('/admin/vDosen/table')->with('info','Record Uploaded Successfully');
                }
            }
        }
        return back();
    }
}
