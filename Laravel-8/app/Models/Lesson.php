<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'parent_id',
        'title',
        'completed',
        'total',
        'duration',
        'videoId',
    ];

    public function lessons()
    {
        return $this->hasMany(Lesson::class, 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo(Lesson::class, 'parent_id');
    }
}
