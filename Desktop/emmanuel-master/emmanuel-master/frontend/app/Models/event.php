<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    use HasFactory;

    protected $table = 'events';

    protected $primaryKey =  'id';

    protected $fillable = [
        'title',
        'description',
        'photo_path',       
    ];

   /**
         * Get all of the images for the event
         *
         * @return \Illuminate\Database\Eloquent\Relations\HasMany
         */
        public function EventImages(): HasMany
        {
            return $this->hasMany(EventImages::class);
        }
    
};
