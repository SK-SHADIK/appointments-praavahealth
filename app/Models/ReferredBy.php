<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferredBy extends Model
{
    protected $table = "referred_by";
    const CREATED_AT = 'cd';
    const UPDATED_AT = 'ud';
}
