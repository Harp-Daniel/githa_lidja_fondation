<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = [
        'amount',
        'donor_name',
        'email',
        'phone',
        'message',
        'status',
        'transaction_id',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
    ];
}
