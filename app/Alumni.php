<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Alumni;

class Alumni extends Model
{
    public $fillable = ['NPM','Nama', 'Pembimbing','Tanggal', 'Penguji', 'Judul'];

   	protected $dates =  ['Tanggal'];


	public $timestamps = false;

    protected $table = "Alumni";



}
