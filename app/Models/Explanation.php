<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Explanation extends Model
{
    use HasFactory;
    protected $table = 'explanations';
    protected $primaryKey = "id";
    protected $keyType = 'integer';
    public $timestamps = false;
    protected $guarded = [];

    public function subject(): BelongsTo {
        return $this->belongsTo(Subject::class, 'subject_id', 'id');
    }

    public function image(): BelongsTo {
        return $this->belongsTo(Image::class, 'image_id', 'id');
    }
}
