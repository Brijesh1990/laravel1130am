<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class EmployeeContact extends Model
{
    use HasFactory,Notifiable;
    protected $fillable=[
        'name',
        'email',
        'phone',
        'subject',
        'message'
    ];

    protected $table='contacts';
}
