<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Score extends Model
{
    use HasFactory;
    protected $table = 'scores';
    protected $primaryKey = "id";
    protected $keyType = 'integer';
    public $timestamps = false;
    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class, "subject_id", "id");
    }
}
