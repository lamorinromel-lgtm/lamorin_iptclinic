<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'appointment_date',
        'appointment_time',
        'doctor',
        'status',
        'reason'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}