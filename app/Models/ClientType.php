<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientType extends Model
{
    protected $table = "client_type";
    const CREATED_AT = 'cd';
    const UPDATED_AT = 'ud';
}
