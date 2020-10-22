<?php

namespace Database\Factories;

use App\Models\ProductModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProductModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'feature' => 'cor amarela',
            'name' => 'camisa brasil tamanho G',
            'price' => 'R$ 200,00',
            'sku' => '1111111111',
            'quantity' => '1',
            'id_product' => '1',
        ];
    }
}
