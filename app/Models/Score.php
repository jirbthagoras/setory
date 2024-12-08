<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Score extends Model
{
    use HasFactory;
    protected $table = 'scores';
    protected $primaryKey = "id";
    protected $keyType = 'integer';
    public $timestamps = false;
    protected $guarded = [];

    public function user(): BelongsToMany
    {
        return $this->belongsToMany(User::class, "user_id", "id");
    }

    public function subject(): BelongsToMany
    {
        return $this->belongsToMany(Subject::class, "subject_id", "id");
    }
}
