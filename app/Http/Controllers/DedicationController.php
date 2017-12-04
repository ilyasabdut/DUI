<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\DedicationDosen;
use App\DedicationMhs;
use DB;
use Excel;
use Input;
use Carbon;





class DedicationController extends Controller
{
	public function getDsn(){

        $data = DedicationDosen::select('*')->orderBy('Tanggal','desc')
                    ->get()
                    ->groupBy(function($date) {
                      return Carbon::parse($date->Tanggal)->format('Y');
                 });


        return view('vUser/dedication',compact('data',$data));
    }

    public function getMhs(){

        $data = DedicationMhs::select('*')->orderBy('Tanggal','desc')
                    ->get()
                    ->groupBy(function($date) {
                      return Carbon::parse($date->Tanggal)->format('Y');
                 });
 
        return view('vUser/dedicationstd',compact('data',$data));
    }

    public function getDataDosen(){

    	$data = DedicationDosen::orderBy('ID', 'asc')->paginate(5);
    	
    	return view('vDedicationDosen/table',compact('data'));
    }

    public function addDosen(Request $req){

    	$this->validate($req, [
    		'NIDN' => 'required',
    		'Nama' => 'required',
    		'Tempat' => 'required',
    		'Jenis' => 'required',
    		'Tanggal' => 'required',
    	]);


    	$data = new DedicationDosen;
    	$data->NIDN = $req->input('NIDN');
    	$data->Nama= $req->input('Nama');
    	$data->Tempat = $req->input('Tempat');
    	$data->Jenis= $req->input('Jenis');
    	$data->Tanggal = $req->input('Tanggal');
    	$data->save();

    	  if(count($data) > 0){
    			return redirect('/admin/vDedicationDosen/table')->with('info','Record Saved Successfully');
            } else {
                return view('vDedicationDosen/create');
            }
    }

    public function updateDosen($ID){
    	$data = DedicationDosen::find($ID);
    	
    	return view('vDedicationDosen/update',['data' => $data]);
    }

    public function editDosen(Request $req,$ID){
    	$this->validate($req, [
    		'NIDN' => 'required',
            'Nama' => 'required',
            'Tempat' => 'required',
            'Jenis' => 'required',
            'Tanggal' => 'required',
    	]);

    	$data = array(
    		'NIDN' => $req->input('NIDN'),
			'Nama' =>  $req->input('Nama'),
			'Tempat' => $req->input('Tempat'),
			'Jenis' =>$req->input('Jenis'),
			'Tanggal' => $req->input('Tanggal')
    	);

    	DedicationDosen::where('ID', $ID)->update($data);

    	  if(count($data) > 0){
    			return redirect('/admin/vDedicationDosen/table')->with('info','Record Updated Successfully');
            } else {
                return view('vDedicationDosen/update');
            }
    }

    public function readDosen($ID){
    	$data = DedicationDosen::find($ID);
    	
    	return view('vDedicationDosen/read',['data' => $data]);
    }

    public function deleteDosen($ID){
    	DedicationDosen::where('ID', $ID)->delete();

    	 if(count($ID) > 0){
    			return redirect('/admin/vDedicationDosen/table')->with('info','Record Deleted Successfully');
            } else {
                return view('vDedicationDosen/table')->with('info','Record not Deleted');;
            }
    }

       public function downloadExcelDosen($type)
    {
        $data = DedicationDosen::get()->toArray();
        return Excel::create('List Lecturer Dedication ', function($excel) use ($data) {
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
                       'ID' => $value->id,
                    'NIDN' => $value->nidn,
                    'Nama' =>  $value->nama,
                    'Tempat' => $value->tempat,
                    'Jenis' => $value->jenis,
                    'Tanggal' =>$value->tanggal
                ];} 

                if(!empty($insert)){
                    DB::table('DedicationDosen')->insert($insert);
                return redirect('/admin/vDedicationDosen/table')->with('info','Record Uploaded Successfully');
                }          
            }
        }
        return back();
    }

//====MAHASISWA====
    public function getDataMhs(){

        $data = DedicationMhs::orderBy('ID', 'asc')->paginate(5);
        
        return view('vDedicationMhs/table',compact('data'));
    }

    public function addMhs(Request $req){

        $this->validate($req, [
            'NPM' => 'required',
            'Nama' => 'required',
            'Tempat' => 'required',
            'Jenis' => 'required',
            'Tanggal' => 'required',
        ]);


        $data = new DedicationMhs;
        $data->NPM = $req->input('NPM');
        $data->Nama= $req->input('Nama');
        $data->Tempat = $req->input('Tempat');
        $data->Jenis= $req->input('Jenis');
        $data->Tanggal = $req->input('Tanggal');
        $data->save();

          if(count($data) > 0){
                return redirect('/admin/vDedicationMhs/table')->with('info','Record Saved Successfully');
            } else {
                return view('vDedicationMhs/create');
            }
    }

    public function updateMhs($ID){
        $data = DedicationMhs::find($ID);
        
        return view('vDedicationMhs/update',['data' => $data]);
    }

    public function editMhs(Request $req,$ID){
        $this->validate($req, [
            'NPM' => 'required',
            'Nama' => 'required',
            'Tempat' => 'required',
            'Jenis' => 'required',
            'Tanggal' => 'required',
        ]);

        $data = array(
            'NPM' => $req->input('NPM'),
            'Nama' =>  $req->input('Nama'),
            'Tempat' => $req->input('Tempat'),
            'Jenis' =>$req->input('Jenis'),
            'Tanggal' => $req->input('Tanggal')
        );

        DedicationMhs::where('ID', $ID)->update($data);

          if(count($data) > 0){
                return redirect('/admin/vDedicationMhs/table')->with('info','Record Updated Successfully');
            } else {
                return view('vDedicationMhs/update');
            }
    }

    public function readMhs($ID){
        $data = DedicationMhs::find($ID);
        
        return view('vDedicationMhs/read',['data' => $data]);
    }

    public function deleteMhs($ID){
        DedicationMhs::where('ID', $ID)->delete();

         if(count($ID) > 0){
                return redirect('/admin/vDedicationMhs/table')->with('info','Record Deleted Successfully');
            } else {
                return view('vDedicationMhs/table')->with('info','Record not Deleted');;
            }
    }

        public function downloadExcelMhs($type)
    {
        $data = DedicationMhs::get()->toArray();
        return Excel::create('List Student Dedication ', function($excel) use ($data) {
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
                    'Tempat' => $value->tempat,
                    'Jenis' => $value->jenis,
                    'Tanggal' =>$value->tanggal,
                    'Gambar' => $value->gambar
                ];} 

                if(!empty($insert)){
                    DB::table('DedicationMhs')->insert($insert);
                return redirect('/admin/vDedicationMhs/table')->with('info','Record Uploaded Successfully');
                }          
            }
        }
        return back();
    }
    
}
