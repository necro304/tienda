<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'client_id',
        'total',
        'sub_total'
        ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);

    }
}
