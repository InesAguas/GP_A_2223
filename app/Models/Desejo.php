<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desejo extends Model
{
    use HasFactory;

    protected $table = 'produtos_desejos';
    protected $primaryKey = 'p_id';
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'p_id',
        'u_id'
    ];

    public function productID(){
        return $this->belongsTo(Product::class);
    }
}
