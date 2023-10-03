<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected  $primaryKey = 'event_id';
    protected $fillable = [
        'date',
        'agency_id',
        'limit',
    ];
}
