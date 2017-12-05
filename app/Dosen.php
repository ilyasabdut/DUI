<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Dosen;

class Dosen extends Model
{
    public $fillable = ['NIDN','Nama', 'Email'];


	public $timestamps = false;

    protected $table = "Dosen";
}
