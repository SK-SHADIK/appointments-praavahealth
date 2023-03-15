<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentRequestList extends Model
{
    protected $table = "appointment_request_list";
    const CREATED_AT = 'cd';
    const UPDATED_AT = 'ud';
}
