<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\AchievementDosen;
use App\AchievementMhs;
use DB;
use Excel;
use Input;
use Carbon;




class AchievementController extends Controller
{
       


//DOSEN
     public function getDsn(){

        $data = AchievementDosen::select('*')->orderBy('Tanggal','desc')
                    ->get()
                    ->groupBy(function($date) {
                      return Carbon::parse($date->Tanggal)->format('Y');
                 });


        return view('vUser/achievement',compact('data',$data));
    }
    
    public function getDataDosen(){

    	$data = AchievementDosen::orderBy('ID', 'asc')->paginate(5);
    	
    	return view('vAchievementDosen/table',compact('data'));
    }

    public function addDosen(Request $req){
    	$this->validate($req, [
    		'NIDN' => 'required',
    		'Nama' => 'required',
    		'Prestasi' => 'required',
    		'Tanggal' => 'required',
            'Keterangan' => 'required'

    	]);

        
    	$data = new AchievementDosen;
    	$data->NIDN = $req->input('NIDN');
    	$data->Nama= $req->input('Nama');
    	$data->Prestasi= $req->input('Prestasi');
    	$data->Tanggal = $req->input('Tanggal');
        $data->Keterangan = $req->input('Keterangan');
    	$data->save();

    	  if(count($data) > 0){
    			return redirect('/admin/vAchievementDosen/table')->with('info','Record Saved Successfully');
            } else {
                return view('vAchievementDosen/create');
            }
    }

    public function updateDosen($ID){
    	$data = AchievementDosen::find($ID);
    	
    	return view('vAchievementDosen/update',['data' => $data]);
    }

    public function edit(Request $req,$ID){
    	$this->validate($req, [
    		'NIDN' => 'required',
            'Nama' => 'required',
            'Prestasi' => 'required',
            'Tanggal' => 'required',
            'Keterangan' => 'required'


    	]);

    	$data = array(
    		'NIDN' => $req->input('NIDN'),
			'Nama' =>  $req->input('Nama'),
			'Prestasi' =>$req->input('Prestasi'),
			'Tanggal' => $req->input('Tanggal'),
            'Keterangan' => $req->input('Keterangan')
    	);

    	AchievementDosen::where('ID', $ID)->update($data);

    	  if(count($data) > 0){
    			return redirect('/admin/vAchievementDosen/table')->with('info','Record Updated Successfully');
            } else {
                return view('vAchievementDosen/update');
            }
    }

    public function readDosen($ID){
    	$data = AchievementDosen::find($ID);
    	
    	return view('vAchievementDosen/read',['data' => $data]);
    }

    public function deleteDosen($ID){
    	AchievementDosen::where('ID', $ID)->delete();

    	 if(count($ID) > 0){
    			return redirect('/admin/vAchievementDosen/table')->with('info','Record Deleted Successfully');
            } else {
                return view('vAchievementDosen/table')->with('info','Record not Deleted');;
            }
    }

     public function downloadExcelDosen($type)
    {
        $data = AchievementDosen::get()->toArray();
        return Excel::create('List Lecturer Achievement ', function($excel) use ($data) {
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
                    'Prestasi' => $value->prestasi,
                    'Tanggal' =>$value->tanggal,
                    'Keterangan' => $value->keterangan
                ];} 

                if(!empty($insert)){
                    DB::table('AchievementDosen')->insert($insert);
                return redirect('/admin/vAchievementDosen/table')->with('info','Record Uploaded Successfully');
                }          
            }
        }
        return back();
    }

//Mahasiswa
     public function getMhs(){

        $data = AchievementMhs::select('*')->orderBy('Tanggal','desc')
                    ->get()
                    ->groupBy(function($date) {
                      return Carbon::parse($date->Tanggal)->format('Y');
                 });
 
        return view('vUser/achievementstd',compact('data',$data));
    }
     public function getDataMhs(){

        $data = AchievementMhs::orderBy('ID', 'asc')->paginate(5);
        
        return view('vAchievementMhs/table',compact('data'));
    }

    public function addMhs(Request $req){

        $this->validate($req, [
            'NPM' => 'required',
            'Nama' => 'required',
            'Prestasi' => 'required',
            'Tanggal' => 'required',
            'Keterangan' => 'required'

        ]);


        $data = new AchievementMhs;
        $data->NPM = $req->input('NPM');
        $data->Nama= $req->input('Nama');
        $data->Prestasi= $req->input('Prestasi');
        $data->Tanggal = $req->input('Tanggal');
        $data->Keterangan = $req->input('Keterangan');
        $data->save();

          if(count($data) > 0){
                return redirect('/admin/vAchievementMhs/table')->with('info','Record Saved Successfully');
            } else {
                return view('vAchievementMhs/create');
            }
    }

    public function updateMhs($ID){
        $data = AchievementMhs::find($ID);
        
        return view('vAchievementMhs/update',['data' => $data]);
    }

    public function editMhs(Request $req,$ID){
        $this->validate($req, [
            'NPM' => 'required',
            'Nama' => 'required',
            'Prestasi' => 'required',
            'Tanggal' => 'required',
            'Keterangan' => 'required'


        ]);

        $data = array(
            'NPM' => $req->input('NPM'),
            'Nama' =>  $req->input('Nama'),
            'Prestasi' =>$req->input('Prestasi'),
            'Tanggal' => $req->input('Tanggal'),
            'Keterangan' => $req->input('Keterangan')
        );

        AchievementMhs::where('ID', $ID)->update($data);

          if(count($data) > 0){
                return redirect('/admin/vAchievementMhs/table')->with('info','Record Updated Successfully');
            } else {
                return view('vAchievementMhs/update');
            }
    }

    public function readMhs($ID){
        $data = AchievementMhs::find($ID);
        
        return view('vAchievementMhs/read',['data' => $data]);
    }

    public function deleteMhs($ID){
        AchievementMhs::where('ID', $ID)->delete();

         if(count($ID) > 0){
                return redirect('/admin/vAchievementMhs/table')->with('info','Record Deleted Successfully');
            } else {
                return view('vAchievementMhs/table')->with('info','Record not Deleted');;
            }
    }

    public function downloadExcelMhs($type)
    {
        $data = AchievementMhs::get()->toArray();
        return Excel::create('List Lecturer Achievement ', function($excel) use ($data) {
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
                    'Prestasi' => $value->prestasi,
                    'Tanggal' =>$value->tanggal,
                    'Keterangan' => $value->keterangan
                ];} 

                if(!empty($insert)){
                    DB::table('AchievementMhs')->insert($insert);
                return redirect('/admin/vAchievementMhs/table')->with('info','Record Uploaded Successfully');
                }          
            }
        }
        return back();
    }
    

   

    

    
}
