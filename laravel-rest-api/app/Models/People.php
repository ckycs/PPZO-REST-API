<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class People extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'phone_number',
        'street',
        'city',
    ];

    protected $keyType = 'string';
    public $incrementing = false;
}
