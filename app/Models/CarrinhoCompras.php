<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desejo extends Model
{
    use HasFactory;

    protected $table = 'produtos_carrinho';
    protected $primaryKey = 'u_id';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'u_id',
        'p_id',
        'c_quantidade'
    ];
}
