<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Email extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject',
        'message',
        'status',
        'to_email'
    ];
    public function from_user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function to_user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
