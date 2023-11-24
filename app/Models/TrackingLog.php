<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TrackingLog extends Model
{
    protected $table = 'tracking_logs';
    protected $fillable = [
        'id', 'transaction_id', 'from_id', 'to_id', 'title', 'short_description', 'department', 'updated_at'
    ];
}
