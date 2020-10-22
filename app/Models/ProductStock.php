<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductStock extends Model
{
    protected $table = 'products_stock';
    use HasFactory;
    protected $fillable = [
        'id_product',
        'id_model_product',
        'quantity'
    ];
}
