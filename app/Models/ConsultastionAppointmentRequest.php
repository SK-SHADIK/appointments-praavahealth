<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultastionAppointmentRequest extends Model
{
    protected $table = "consultastion_appointment_request";
    const CREATED_AT = 'cd';
    const UPDATED_AT = 'ud';
}
