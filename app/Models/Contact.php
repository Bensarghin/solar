<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['tele','email','whatsapp','tele_fixe','tele_parent','adresse','ville_resident','code_postal'];

    public function profile()
    {
        return $this->hasOne(Profile::class,'contact_id');
    }

}
