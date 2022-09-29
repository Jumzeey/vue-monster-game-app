<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventImages extends Model
{
    use HasFactory;
    protected $table = 'event_images';

    protected $primaryKey =  'id';

    protected $fillable = [
        'image_path',       
    ];

    /**
     * Get the user that owns the EventImages
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function event(): BelongsTo
    {
        return $this->belongsTo(events::class);
    }
}
