<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anuncio extends Model
{
    protected $table = 'anuncios';

    protected $primaryKey = 'id';

    protected $fillable = [
        'titulo',
        'descripcion'
    ];

    protected $guarded = 'id';
}
