<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    use HasFactory;

    protected $fillable = [
        'background_color',
        'notify',
        'notify_emails'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
