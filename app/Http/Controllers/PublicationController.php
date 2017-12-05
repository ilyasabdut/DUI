<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\PublicationDosen;
use App\PublicationMhs;
use DB;
use Excel;
use Input;
use Carbon;



class PublicationController extends Controller
{

public function getDsn(){

        $data = PublicationDosen::select('*')->orderBy('Tanggal','desc')
                    ->get()
                    ->groupBy(function($date) {
                      return Carbon::parse($date->Tanggal)->format('Y');
                 });


        return view('vUser/publication',compact('data',$data));
    }

    public function getMhs(){

        $data = PublicationMhs::select('*')->orderBy('Tanggal','desc')
                    ->get()
                    ->groupBy(function($date) {
                      return Carbon::parse($date->Tanggal)->format('Y');
                 });
 
        return view('vUser/publicationstd',compact('data',$data));
    }

//=DOSEN=====
	
    public function getDataDosen(){

    	$data = PublicationDosen::orderBy('ID', 'asc')->paginate(5);
    	
    	return view('vPublicationDosen/table',compact('data'));
    }

    public function addDosen(Request $req){

    	$this->validate($req, [
    		'NIDN' => 'required',
    		'Nama' => 'required',
    		'Judul' => 'required',
    		'Tanggal' => 'required',
            'Keterangan' => 'required'

    	]);


    	$data = new PublicationDosen;
    	$data->NIDN = $req->input('NIDN');
    	$data->Nama= $req->input('Nama');
    	$data->Judul= $req->input('Judul');
    	$data->Tanggal = $req->input('Tanggal');
        $data->Keterangan = $req->input('Keterangan');
    	$data->save();

    	  if(count($data) > 0){
    			return redirect('/admin/vPublicationDosen/table')->with('info','Record Saved Successfully');
            } else {
                return view('vPublicationDosen/create');
            }
    }

    public function updateDosen($ID){
    	$data = PublicationDosen::find($ID);
    	
    	return view('vPublicationDosen/update',['data' => $data]);
    }

    public function editDosen(Request $req,$ID){
    	$this->validate($req, [
    		'NIDN' => 'required',
            'Nama' => 'required',
            'Judul' => 'required',
            'Tanggal' => 'required',
            'Keterangan' => 'required'


    	]);

    	$data = array(
    		'NIDN' => $req->input('NIDN'),
			'Nama' =>  $req->input('Nama'),
			'Judul' =>$req->input('Judul'),
			'Tanggal' => $req->input('Tanggal'),
            'Keterangan' => $req->input('Keterangan')
    	);

    	PublicationDosen::where('ID', $ID)->update($data);

    	  if(count($data) > 0){
    			return redirect('/admin/vPublicationDosen/table')->with('info','Record Updated Successfully');
            } else {
                return view('vPublicationDosen/update');
            }
    }

    public function readDosen($ID){
    	$data = PublicationDosen::find($ID);
    	
    	return view('vPublicationDosen/read',['data' => $data]);
    }

    public function deleteDosen($ID){
    	PublicationDosen::where('ID', $ID)->delete();

    	 if(count($ID) > 0){
    			return redirect('/admin/vPublicationDosen/table')->with('info','Record Deleted Successfully');
            } else {
                return view('vPublicationDosen/table')->with('info','Record not Deleted');;
            }
    }
    

     public function downloadExcelDosen($type)
    {
        $data = PublicationDosen::get()->toArray();
        return Excel::create('List Lecturer Publication ', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

    public function importExcelDosen(Request $req)
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
                    'Judul' => $value->judul,
                    'Tanggal' =>$value->tanggal,
                    'Keterangan' => $value->keterangan
                ];} 

                if(!empty($insert)){
                    DB::table('PublicationDosen')->insert($insert);
                return redirect('/admin/vPublicationDosen/table')->with('info','Record Uploaded Successfully');
                }          
            }
        }
        return back();
    }

//MAHASISWA====
     public function getDataMhs(){

        $data = PublicationMhs::paginate(5);
        
        return view('vPublicationMhs/table',compact('data'));
    }

    public function addMhs(Request $req){

        $this->validate($req, [
            'NPM' => 'required',
            'Nama' => 'required',
            'Judul' => 'required',
            'Tanggal' => 'required',
            'Keterangan' => 'required'

        ]);


        $data = new PublicationMhs;
        $data->NPM = $req->input('NPM');
        $data->Nama= $req->input('Nama');
        $data->Judul= $req->input('Judul');
        $data->Tanggal = $req->input('Tanggal');
        $data->Keterangan = $req->input('Keterangan');
        $data->save();

          if(count($data) > 0){
                return redirect('/admin/vPublicationMhs/table')->with('info','Record Saved Successfully');
            } else {
                return view('vPublicationMhs/create');
            }
    }

    public function updateMhs($ID){
        $data = PublicationMhs::find($ID);
        
        return view('vPublicationMhs/update',['data' => $data]);
    }

    public function editMhs(Request $req,$ID){
        $this->validate($req, [
            'NPM' => 'required',
            'Nama' => 'required',
            'Judul' => 'required',
            'Tanggal' => 'required',
            'Keterangan' => 'required'


        ]);

        $data = array(
            'NPM' => $req->input('NPM'),
            'Nama' =>  $req->input('Nama'),
            'Judul' =>$req->input('Judul'),
            'Tanggal' => $req->input('Tanggal'),
            'Keterangan' => $req->input('Keterangan')
        );

        PublicationMhs::where('ID', $ID)->update($data);

          if(count($data) > 0){
                return redirect('/admin/vPublicationMhs/table')->with('info','Record Updated Successfully');
            } else {
                return view('vPublicationMhs/update');
            }
    }

    public function readMhs($ID){
        $data = PublicationMhs::find($ID);
        
        return view('vPublicationMhs/read',['data' => $data]);
    }

    public function deleteMhs($ID){
        PublicationMhs::where('ID', $ID)->delete();

         if(count($ID) > 0){
                return redirect('/admin/vPublicationMhs/table')->with('info','Record Deleted Successfully');
            } else {
                return view('vPublicationMhs/table')->with('info','Record not Deleted');;
            }
    }

      public function downloadExcelMhs($type)
    {
        $data = PublicationMhs::get()->toArray();
        return Excel::create('List Student Publication ', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

    public function importExcelMhs(Request $req)
    {
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
                    'Judul' => $value->judul,
                    'Tanggal' =>$value->tanggal,
                    'Keterangan' => $value->keterangan
                ];} 

                if(!empty($insert)){
                    DB::table('PublicationMhs')->insert($insert);
                return redirect('/admin/vPublicationMhs/table')->with('info','Record Uploaded Successfully');
                }          
            }
        }
        return back();
    }
}
