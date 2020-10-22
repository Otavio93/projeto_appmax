<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ProductModel extends Model
{
    protected $table = 'products_model';
    use HasFactory;


    protected $fillable = [
        'id_product',
        'feature',
        'price',
        'name',
        'quantity',
        'sku'
    ];
}
