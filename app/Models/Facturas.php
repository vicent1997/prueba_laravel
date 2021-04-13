<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Facturas extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [

        'id',
        'client_id',
        'invoice_num',
        'invoice_date',
        'subtotal',
        'taxvalue',
        'total',
        'created_at',
        'updated_at'

    ];

}
