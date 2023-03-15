<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CancellationReasons extends Model
{
    protected $table = "cancellation_reasons";
    const CREATED_AT = 'cd';
    const UPDATED_AT = 'ud';
}
