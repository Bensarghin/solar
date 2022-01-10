<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scolaire extends Model
{
    use HasFactory;
    protected $fillable = ['pack','bac_niveau','code_massar','filier','region'];
    /**
     * Get the profile that owns the Scolaire
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function profile()
    {
        return $this->hasOne(Profile::class,'scolaire_id');
    }
}
