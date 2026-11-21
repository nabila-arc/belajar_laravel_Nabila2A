<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    // Definisikan nama tabel jika namanya tidak dalam bentuk jamak Model
    protected $table = 'employes';

    // Definisikan primary key jika field-nya bukan id
    protected $primaryKey = 'id';

    // Tipe data primary key
    protected $keyType = 'integer';

}