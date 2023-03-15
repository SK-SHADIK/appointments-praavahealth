<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientDetails extends Model
{
    protected $table = "patient_details";
    const CREATED_AT = 'cd';
    const UPDATED_AT = 'ud';
}
