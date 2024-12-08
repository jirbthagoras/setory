<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Notifications\Notifiable;

class Subject extends Model
{
    use HasFactory;
    protected $table = 'subjects';
    protected $primaryKey = "id";
    protected $keyType = 'integer';
    public $timestamps = false;
    protected $guarded = [];

    public function image(): BelongsTo {
        return $this->belongsTo(Image::class, "image_id", "id");
    }

    public function explanations(): HasMany {
        return $this->hasMany(Explanation::class, "subject_id", "id");
    }

    public function questions(): HasMany {
        return $this->hasMany(Question::class, "subject_id", "id");
    }

    public function rating(): HasOne
    {
        return $this->hasOne(Rating::class, "subject_id", "id");
    }

    public function scores(): HasMany
    {
        return $this->hasMany(Score::class, "subject_id", "id");
    }

    public function coordinates(): HasMany
    {
        return $this->hasMany(Coordinate::class, "subject_id", "id");
    }

}
