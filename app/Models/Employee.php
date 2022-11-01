<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Employee extends Model
{
    use HasFactory, Notifiable;
    protected $fillable=[
        'firstname',
        'lastname',
        'email',
        'mobile',
        'gender',
        'address'
    ];
    protected $table='addemployees';
}
