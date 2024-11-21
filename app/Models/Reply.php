<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reply extends Model
{
    use HasFactory;
    protected $table = 'replies';
    protected $primaryKey = "id";
    protected $keyType = 'integer';
    public $timestamps = true;
    protected $guarded = [];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function chat(): BelongsTo
    {
        return $this->belongsTo(Chat::class, "chat_id", "id");
    }
}
