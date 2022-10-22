<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;
    protected $fillable = ["name", "paise_id"];

    public function paise()
    {

    	return $this->belongsTo(Paise::class);
       
    }
}
