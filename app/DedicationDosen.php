<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DedicationDosen;

class DedicationDosen extends Model
{

	public $timestamps = false;

    protected $table = "DedicationDosen";

    	protected $dates =  ['Tanggal'];


    public $fillable = ['NIDN','Nama', 'Tempat', 'Jenis','Tanggal'];

}
