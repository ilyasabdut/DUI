<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Alumni;

class Alumni extends Model
{
    public $fillable = ['NPM','Nama', 'Pembimbing','Tanggal', 'angkatan', 'Judul'];

   	protected $dates =  ['Tanggal'];


	public $timestamps = false;

    protected $table = "Alumni";



}
