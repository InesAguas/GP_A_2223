<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encomenda extends Model
{
    use HasFactory;

    protected $table = 'encomendas';
    protected $primaryKey = 'e_id';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'u_id',
        'e_data_criada',
        'e_data_confirmada',
        'e_data_entrega',
        'e_estado',
        'e_total',
        'e_comentario'
    ];
}
