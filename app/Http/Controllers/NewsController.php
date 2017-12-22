<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\News;
use DB;
use Excel;
use Input;
use Carbon;
use Storage;
use Image;





class NewsController extends Controller
{

    public function getData(){

        $data = News::all();


        return view('vNews/table',compact('data'));
    }

    public function add(Request $req){

        $this->validate($req, [
            'Judul' => 'required',
            'Isi' => 'required',
            'Tag' => 'required',

        ]);


        $data = new News;
        $data->Judul = $req->input('Judul');
        $data->Isi= $req->input('Isi');
        $data->Tag = $req->input('Tag');

        // Disini proses mendapatkan judul dan memindahkan letak gambar ke folder image
        $file       = $req->file('image');
        $fileName   = $file->getClientOriginalName();
        $req->file('image')->move("image/", $fileName);

        $data->gambar = $fileName;

        $data->save();

          if(count($data) > 0){
                return redirect('/admin/vNews/table')->with('info','Record Saved Successfully');
            } else {
                return view('vNews/create');
            }
    }

    public function update($ID){

        $data = News::find($ID);

        return view('vNews/update',['data' => $data]);
    }

    public function edit(Request $req,$ID){
        $this->validate($req, [
            'Judul' => 'required',
            'Isi' => 'required',
            'Tag' => 'required',

        ]);

        $data = array(
            'Judul' => $req->input('Judul'),
            'Isi' =>  $req->input('Isi'),
            'Tag' => $req->input('Tag'),

        );

        News::where('ID', $ID)->update($data);

          if(count($data) > 0){
                return redirect('/admin/vNews/table')->with('info','Record Updated Successfully');
            } else {
                return view('vNews/update');
            }
    }

    public function read($ID){
        $data = News::find($ID);

        return view('vNews/read',['data' => $data]);
    }



    public function delete($ID){
        News::where('ID', $ID)->delete();

         if(count($ID) > 0){
                return redirect('/admin/vNews/table')->with('info','Record Deleted Successfully');
            } else {
                return view('vNews/table')->with('info','Record not Deleted');;
            }
    }


    public function getNews(){

        $data = News::orderBy('ID', 'desc')->paginate(3);
        return view('/index',compact('data'));
    }

     public function show($ID){
         $data = News::find($ID);

        return view('vUser/showNews',['data' => $data]);
    }

    public function viewNews(){

        $data = News::orderBy('ID', 'desc')->paginate(6);
        return view('/vUser/news',compact('data'));
    // public function lastNews(){
    //
    //     $data = News::orderBy('ID', 'desc')->paginate(4);
    //     return view('/vUser/showNews',compact('data'));
    // }
  }


}
