<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\ResearchDosen;
use DB;
use Excel;
use Input;
use Carbon;




class ResearchController extends Controller
{
 public function getDsn(){

        $data = ResearchDosen::select('*')->orderBy('Tanggal','desc')
                    ->get()
                    ->groupBy(function($date) {
                      return Carbon::parse($date->Tanggal)->format('Y');
                 });


        return view('vUser/research',compact('data',$data));
    }


 public function getMhs(){

        $data = ResearchMhs::select('*')->orderBy('Tanggal','desc')
                    ->get()
                    ->groupBy(function($date) {
                      return Carbon::parse($date->Tanggal)->format('Y');
                 });    
        return view('vUser/researchstd',compact('data',$data));
    }
    
//====DOSEN=	
    public function getDataDosen(){

    	$data = ResearchDosen::orderBy('ID', 'asc')->paginate(5);
    	
    	return view('vResearchDosen/table',compact('data'));
    }

    public function addDosen(Request $req){

    	$this->validate($req, [
    		'NIDN' => 'required',
    		'Nama' => 'required',
    		'Judul' => 'required',
    		'Tanggal' => 'required',
            'Jenis' => 'required'

    	]);


    	$data = new ResearchDosen;
    	$data->NIDN = $req->input('NIDN');
    	$data->Nama= $req->input('Nama');
    	$data->Judul= $req->input('Judul');
    	$data->Tanggal = $req->input('Tanggal');
        $data->Jenis = $req->input('Jenis');
    	$data->save();

    	  if(count($data) > 0){
    			return redirect('/admin/vResearchDosen/table')->with('info','Record Saved Successfully');
            } else {
                return view('vResearchDosen/create');
            }
    }

    public function updateDosen($ID){
    	$data = ResearchDosen::find($ID);
    	
    	return view('vResearchDosen/update',['data' => $data]);
    }

    public function editDosen(Request $req,$ID){
    	$this->validate($req, [
    		'NIDN' => 'required',
            'Nama' => 'required',
            'Judul' => 'required',
            'Tanggal' => 'required',
            'Jenis' => 'required'


    	]);

    	$data = array(
    		'NIDN' => $req->input('NIDN'),
			'Nama' =>  $req->input('Nama'),
			'Judul' =>$req->input('Judul'),
			'Tanggal' => $req->input('Tanggal'),
            'Jenis' => $req->input('Jenis')
    	);

    	ResearchDosen::where('ID', $ID)->update($data);

    	  if(count($data) > 0){
    			return redirect('/admin/vResearchDosen/table')->with('info','Record Updated Successfully');
            } else {
                return view('vResearchDosen/update');
            }
    }

    public function readDosen($ID){
    	$data = ResearchDosen::find($ID);
    	
    	return view('vResearchDosen/read',['data' => $data]);
    }

    public function deleteDosen($ID){
    	ResearchDosen::where('ID', $ID)->delete();

    	 if(count($ID) > 0){
    			return redirect('/admin/vResearchDosen/table')->with('info','Record Deleted Successfully');
            } else {
                return view('vResearchDosen/table')->with('info','Record not Deleted');;
            }
    }

     public function downloadExcelDosen($type)
    {
        $data = ResearchDosen::get()->toArray();
        return Excel::create('List Lecturer Research', function($excel) use ($data) {
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
                    'Jenis' => $value->jenis
                ];} 

                if(!empty($insert)){
                    DB::table('ResearchDosen')->insert($insert);
                return redirect('/admin/vResearchDosen/table')->with('info','Record Uploaded Successfully');
                }          
            }
        }
        return back();
    }

}
