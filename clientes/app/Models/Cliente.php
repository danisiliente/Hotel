<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'tbClientes';
    protected $primaryKey ='cliId';

    protected $fillable = [
        'rolId',
        'cliFechaRegistro',
    ];
    
}
