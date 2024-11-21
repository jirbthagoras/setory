<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $primaryKey = "id";
    protected $keyType = 'integer';
    public $timestamps = false;
    protected $guarded = [];

    public function image(): BelongsTo {
        return $this->belongsTo(Image::class, 'image_id', 'id');
    }
}
