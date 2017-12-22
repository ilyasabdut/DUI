<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Education;



class EducationController extends Controller
{
    
    public function getData(){

        $data = Education::all();
        
        return view('vEducation/table',compact('data'));
    }

    public function add(Request $req){

        $this->validate($req, [
            'Judul' => 'required',
            'Isi' => 'required',
            
        ]);


        $data = new Education;
        $data->Judul = $req->input('Judul');
        $data->Isi= $req->input('Isi');
        
        $data->save();

          if(count($data) > 0){
                return redirect('/admin/vEducation/table')->with('info','Record Saved Successfully');
            } else {
                return view('vEducation/create');
            }
    }

    public function update($ID){
        
        $data = Education::find($ID);
        
        return view('vEducation/update',['data' => $data]);
    }

    public function edit(Request $req,$ID){
        $this->validate($req, [
            'Judul' => 'required',
            'Isi' => 'required',
            
        ]);

        $data = array(
            'Judul' => $req->input('Judul'),
            'Isi' =>  $req->input('Isi'),
            
        );

        Education::where('ID', $ID)->update($data);

          if(count($data) > 0){
                return redirect('/admin/vEducation/table')->with('info','Record Updated Successfully');
            } else {
                return view('vEducation/update');
            }
    }

    public function read($ID){
        $data = Education::find($ID);
        
        return view('vEducation/read',['data' => $data]);
    }

    public function delete($ID){
        Education::where('ID', $ID)->delete();

         if(count($ID) > 0){
                return redirect('/admin/vEducation/table')->with('info','Record Deleted Successfully');
            } else {
                return view('vEducation/table')->with('info','Record not Deleted');;
            }
    }
    
}
