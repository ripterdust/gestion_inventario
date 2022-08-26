<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    // fetch nit
    // @param $nit string
    // @return { err: boolean, message? : string, data: Client}
    public function searchByNit($nit = null){
        return ["name" => 'Bryan Arévalo', 'adress' => '4524'];
    }

}
