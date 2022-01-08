<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    public $timestamp = true;

    public function profile()
    {
        return $this->hasOne(Profile::class,'contact_id');
    }

}
