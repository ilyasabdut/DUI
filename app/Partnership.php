<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Partnership;

class Partnership extends Model
{

	public $timestamps = false;

    protected $table = "Partnership";

        public $fillable = ['Partner','Program', 'Jenis'];

}
