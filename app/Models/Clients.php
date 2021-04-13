<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Clients extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'id',
        'firstname',
        'companyname',
        'status',
        'created_at',
        'updated_at',
    ];
}
