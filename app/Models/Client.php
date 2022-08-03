<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // fetch nit
    public function getClientByNit($nit){
        // Paso 1 -> Buscar en la base de datos y si no se encuentra, dejar preparado para buscar en la web
        // Paso 2 -> retornar el cliente
    }

}
