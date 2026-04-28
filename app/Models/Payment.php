<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'appointment_id',
        'amount',
        'status',
        'payment_date',
    ];

    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}
