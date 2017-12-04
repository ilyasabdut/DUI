<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Mahasiswa;

class Mahasiswa extends Model
{

	public $timestamps = false;

    protected $table = "Mahasiswa";

  	public $fillable = ['NPM','Nama', 'Email'];

}
