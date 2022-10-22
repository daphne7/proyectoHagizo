<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;
    protected $fillable = ["name", "provincia_id"];

    public function provincia()
    {
    	return $this->belongsTo(Provincia::class);

    }
}
