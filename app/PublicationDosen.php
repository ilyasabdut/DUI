<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PublicationDosen;

class PublicationDosen extends Model
{

	public $timestamps = false;

    protected $table = "PublicationDosen";

    	protected $dates =  ['Tanggal'];

        public $fillable = ['NIDN','Nama', 'Judul','Tanggal', 'Keterangan'];

}
