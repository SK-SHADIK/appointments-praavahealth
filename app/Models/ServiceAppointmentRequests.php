<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceAppointmentRequests extends Model
{
    protected $table = "service_appointment_requests";
    const CREATED_AT = 'cd';
    const UPDATED_AT = 'ud';
}
