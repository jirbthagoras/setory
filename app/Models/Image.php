<?php

namespace App\Models;

use Database\Seeders\ExplanationsSeeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Image extends Model
{
    use HasFactory;
    protected $table = 'images';
    protected $primaryKey = "id";
    protected $keyType = 'integer';
    protected $guarded = [];
    public $timestamps = false;

    public function subject(): HasOne {
        return $this->hasOne(Subject::class, 'image_id  ', 'id');
    }

    public function explanation(): HasOne {
        return $this->hasOne(Explanation::class, 'image_id', 'id');
    }

    public function question(): HasOne {
        return $this->hasOne(Question::class, 'image_id', 'id');
    }
}
