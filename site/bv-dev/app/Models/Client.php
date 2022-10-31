<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //use HasFactory;
    //protected $table="clients";
    //protected $primaryKey="id";
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone'
    ];
    //protected $guarded="id";

    // public $timestaps=false;

}
