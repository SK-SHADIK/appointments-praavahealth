<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorporateAppointments extends Model
{
    protected $table = "corporate_appointments";
    const CREATED_AT = 'cd';
    const UPDATED_AT = 'ud';
}
