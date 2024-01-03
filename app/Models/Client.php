<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property string|mixed $name
 * @property int|mixed $phone
 * @property string|mixed $address
 */
class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone',
        'address'
    ];


    public function sales(): HasMany
    {
        return $this->hasMany(Sale::class, "client_id");
    }

}
