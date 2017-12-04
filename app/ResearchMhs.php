<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\ResearchMhs;

class ResearchMhs extends Model
{

	public $timestamps = false;

	protected $dates =  ['Tanggal'];

    protected $table = "ResearchMhs";

            public $fillable = ['NPM','Nama', 'Judul','Tanggal', 'Jenis'];

}
