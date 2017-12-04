<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DedicationMhs;

class DedicationMhs extends Model
{

	public $timestamps = false;

    protected $table = "DedicationMhs";

    	protected $dates =  ['Tanggal'];


  	public $fillable = ['NPM','Nama', 'Tempat', 'Jenis','Tanggal'];

}
