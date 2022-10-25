<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filter extends Model
{
    use HasFactory;

    protected $casts = [
        'show_random_questions' => 'boolean',
        'hide_textarea' => 'boolean',
        'hide_answers_button' => 'boolean',
    ];

    protected $fillable = [
        'show_random_questions',
        'hide_textarea',
        'hide_answers_button',
        'search_based_on'
    ];

    function user()
    {
        return $this->belongsTo(User::class);
    }
}
