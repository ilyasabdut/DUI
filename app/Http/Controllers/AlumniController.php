<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Alumni;
use DB;
use Excel;
use Input;
use Carbon;




class AlumniController extends Controller
{
    public function getAl(){

        $data = Alumni::orderBy('ID', 'asc')->paginate(10);       
        return view('vUser/alumni',compact('data'));
    }
	
    public function getData(){

    	$data = Alumni::orderBy('ID', 'asc')->paginate(5);
    	
    	return view('vAlumni/table',compact('data'));
    }

    public function add(Request $req){

    	$this->validate($req, [
    		'NPM' => 'required',
    		'Nama' => 'required',
    		'Pembimbing' => 'required',
    		'Tanggal' => 'required',
    		'Penguji' => 'required',
    		'Judul' => 'required',
    	]);


    	$data = new Alumni;
    	$data->NPM = $req->input('NPM');
    	$data->Nama= $req->input('Nama');
    	$data->Pembimbing = $req->input('Pembimbing');
    	$data->Tanggal= $req->input('Tanggal');
    	$data->Penguji = $req->input('Penguji');
    	$data->Judul = $req->input('Judul');
    	$data->save();

    	  if(count($data) > 0){
    			return redirect('/admin/vAlumni/table')->with('info','Record Saved Successfully');
            } else {
                return view('vAlumni/create');
            }
    }

    public function update($ID){
    	$data = Alumni::find($ID);
    	
    	return view('vAlumni/update',['data' => $data]);
    }

    public function edit(Request $req,$ID){
    	$this->validate($req, [
    		'NPM' => 'required',
    		'Nama' => 'required',
    		'Pembimbing' => 'required',
    		'Tanggal' => 'required',
    		'Judul' => 'required',
            'Angkatan' => 'required'
    	]);

    	$data = array(
    		'NPM' => $req->input('NPM'),
			'Nama' =>  $req->input('Nama'),
			'Pembimbing' => $req->input('Pembimbing'),
			'Tanggal' =>$req->input('Tanggal'),
			'Judul' => $req->input('Judul'),
            'Angkatan' => $req->input('angkatan')
    	);

    	Alumni::where('ID', $ID)->update($data);

    	  if(count($data) > 0){
    			return redirect('/admin/vAlumni/table')->with('info','Record Updated Successfully');
            } else {
                return view('vAlumni/update');
            }
    }

    public function read($ID){
    	$data = Alumni::find($ID);
    	
    	return view('vAlumni/read',['data' => $data]);
    }

    public function delete($ID){
    	Alumni::where('ID', $ID)->delete();

    	 if(count($ID) > 0){
    			return redirect('/admin/vAlumni/table')->with('info','Record Deleted Successfully');
            } else {
                return view('vAlumni/table')->with('info','Record not Deleted');;
            }
    }


    

    public function downloadExcel($type)
    {
        $data = Alumni::get()->toArray();
        return Excel::create('List Alumni', function($excel) use ($data) {
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
                        // 'title' => $value->title,
                        // 'description' => $value->description
                    'NPM' => $value->npm,
                    'Nama' =>  $value->nama,
                    'Pembimbing' => $value->pembimbing,
                    'Tanggal' =>$value->tanggal,
                    'Judul' => $value->judul,
                    'Angkatan' => $value->angkatan
                ];
                } 

                if(!empty($insert)){
                    DB::table('Alumni')->insert($insert);
                return redirect('/admin/vAlumni/table')->with('info','Record Uploaded Successfully');
                }          
            }
        }
        return back();
    }
    
}
