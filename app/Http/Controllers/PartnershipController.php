<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Partnership;
use DB;
use Excel;
use Input;
use Carbon;



class PartnershipController extends Controller
{
    public function getPartner(){

        $data = Partnership::all();
        return view('vUser/partnership',compact('data'));
    }

    public function getData(){

    	$data = Partnership::all();

    	return view('vPartnership/table')->with('data', $data);
    }

    public function add(Request $req){

    	$this->validate($req, [
    		'Partner' => 'required',
    		'Program' => 'required',
    		'Jenis' => 'required',

    	]);


    	$data = new partnership;
    	$data->Partner = $req->input('Partner');
    	$data->Program = $req->input('Program');
    	$data->Jenis = $req->input('Jenis');

    	$data->save();

    	  if(count($data) > 0){
    			return redirect('/admin/vPartnership/table')->with('info','Record Saved Successfully');
            } else {
                return view('vPartnership/create');
            }
    }

    public function update($ID){
    	$data = partnership::find($ID);

    	return view('vPartnership/update',['data' => $data]);
    }

    public function edit(Request $req,$ID){
    	$this->validate($req, [
    		'Partner' => 'required',
            'Program' => 'required',
            'Jenis' => 'required',
    	]);

    	$data = array(
    	   'Partner'=> $req->input('Partner'),
            'Program' => $req->input('Program'),
            'Jenis' => $req->input('Jenis')
    	);

    	partnership::where('ID', $ID)->update($data);

    	  if(count($data) > 0){
    			return redirect('/admin/vPartnership/table')->with('info','Record Updated Successfully');
            } else {
                return view('vPartnership/update');
            }
    }

    public function read($ID){
    	$data = partnership::find($ID);

    	return view('vPartnership/read',['data' => $data]);
    }

    public function delete($ID){
    	partnership::where('ID', $ID)->delete();

    	 if(count($ID) > 0){
    			return redirect('/admin/vPartnership/table')->with('info','Record Deleted Successfully');
            } else {
                return view('vPartnership/table')->with('info','Record not Deleted');;
            }
    }

     public function downloadExcel($type)
    {
        $data = partnership::get()->toArray();
        return Excel::create('List Partnership ', function($excel) use ($data) {
            $excel->sheet('mySheet', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }

    public function importExcel(Request $req)
    {
      Partnership::truncate();

        $this->validate($req, ['import_file' => 'required|mimes:xls,xlsx,csv']);

        if(Input::hasFile('import_file')){
            $path = Input::file('import_file')->getRealPath();
            $data = Excel::load($path, function($reader) {

            })->get();
            if(!empty($data) && $data->count()){
                foreach ($data as $key => $value) {
                    $insert[] = [

                    'Partner' => $value->partner,
                    'Program' =>  $value->program,
                    'Jenis' => $value->jenis

                ];}

                if(!empty($insert)){
                    DB::table('Partnership')->insert($insert);
                return redirect('/admin/vPartnership/table')->with('info','Record Uploaded Successfully');
                }
            }
        }

        return back();
    }
}
