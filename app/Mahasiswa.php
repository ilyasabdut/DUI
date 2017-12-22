<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mahasiswa;

class Mahasiswa extends Model
{

	public $timestamps = false;

    protected $table = "Mahasiswa";
		protected $dates =  ['TanggalMasuk'];


  	public $fillable = ['NPM','Nama', 'Email'];

}
