<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory;
    use SoftDeletes;

    // Define la tabla que este modelo utilizará
    protected $table = 'contacts';

    // Los atributos que se pueden llenar masivamente
    protected $fillable = ['nombre', 'asunto', 'email', 'texto'];

    // Si deseas usar SoftDeletes (borrado suave), descomenta la siguiente línea
    // protected $dates = ['deleted_at'];
}
