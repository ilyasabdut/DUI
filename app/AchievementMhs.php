<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\AchievementMhs;

class AchievementMhs extends Model
{

	public $timestamps = false;

    protected $table = "AchievementMhs";

       	protected $dates =  ['Tanggal'];

       public $fillable = ['NPM','Nama', 'Prestasi','Tanggal', 'Keterangan'];

}
