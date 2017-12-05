<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ResearchDosen;

class ResearchDosen extends Model
{

	public $timestamps = false;

	protected $dates =  ['Tanggal'];

    protected $table = "ResearchDosen";

        public $fillable = ['NIDN','Nama', 'Judul','Tanggal', 'Jenis'];

}
