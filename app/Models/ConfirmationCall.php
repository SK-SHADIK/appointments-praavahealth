<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfirmationCall extends Model
{
    protected $table = "confirmation_call";
    const CREATED_AT = 'cd';
    const UPDATED_AT = 'ud';
}
