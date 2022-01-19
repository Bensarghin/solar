<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etudiant extends Model
{
    use HasFactory;

    protected $fillable = ['image','cin','nom','prenom','prenom_ar','nom_ar','date_nais','lieu_nais','gender','payer'];

    /**
     * Get the profile associated with the Etudiant
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function profile()
    {
        return $this->hasOne(Profile::class, 'etudiant_id');
    }
}
