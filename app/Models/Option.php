<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Option extends Model
{
    use HasFactory;
    protected $table = 'options';
    protected $primaryKey = "id";
    protected $keyType = 'integer';
    public $timestamps = false;
    protected $guarded = [];

    public function question(): BelongsTo {
        return $this->belongsTo(Question::class, 'question_id', "id");
    }
}
