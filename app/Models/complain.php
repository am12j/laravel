<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class complain extends Model
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'email';
    public $timestamps = false;
     protected $fillable = [

        'name',
        'phone',
        'email',
        'pin',
        'address',
        'complaint',
        'status'

    ];
}