<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AchievementDosen;
use Carbon;

class AchievementDosen extends Model
{

	public $timestamps = false;


    protected $table = "AchievementDosen";

    	protected $dates =  ['Tanggal'];


    public $fillable = ['NIDN','Nama', 'Prestasi','Tanggal', 'Keterangan'];

}
