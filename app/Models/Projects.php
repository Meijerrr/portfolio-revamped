<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'language',
        'link',
        'type',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
