<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceStatus extends Model
{
    protected $table = "invoice_status";
    const CREATED_AT = 'cd';
    const UPDATED_AT = 'ud';
}
