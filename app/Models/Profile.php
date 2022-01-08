<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    /**
         * Get the user that owns the Profile
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function contact()
        {
            return $this->belongsTo(Contact::class);
        }

        public function etudiant()
        {
            return $this->belongsTo(Etudiant::class,'etudiant_id');
        }

        public function scolaire() 
        {
            return $this->belongsTo(Scolaire::class, 'scolaire_id');
        }
}
