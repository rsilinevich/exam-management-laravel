<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'date', 'professor_id', 'grade'];

    public function professor()
    {
        return $this->belongsTo(Professor::class);
    }

    //to treat date as a datetime
    protected $casts = [
        'date' => 'datetime',
    ];
}
