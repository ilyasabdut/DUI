<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\PublicationMhs;

class PublicationMhs extends Model
{

	public $timestamps = false;

    protected $table = "PublicationMhs";
    	protected $dates =  ['Tanggal'];


    public $fillable = ['NPM','Nama', 'Judul','Tanggal', 'Keterangan'];

}
