<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approved extends Model
{
    protected $table = 'approved';
    protected $fillable = [
        'id',
        'transaction_id',
        'from_id'
    ];
}
