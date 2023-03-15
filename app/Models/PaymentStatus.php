<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentStatus extends Model
{
    protected $table = "payment_status";
    const CREATED_AT = 'cd';
    const UPDATED_AT = 'ud';
}
