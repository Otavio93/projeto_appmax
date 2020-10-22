<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductModel;
use App\Models\ProductStock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductModelController extends Controller
{


    public function index()
    {
        $products = ProductModel::orderBy('id', 'desc')->paginate(3);

        return view('products.products', ['products' => $products]);
    }

    public function create(Request $request)
    {
        $product_model = ProductModel::create($request->all());
        $sku = Product::find($request->get('id_product'));
        $arr = [
            'id_product' => $request->get('id_product'),
            'id_model_product' => $product_model->id
        ];
        
        if ( !empty($request->get('id_product')) ) {
            $stock = ProductStock::where('id_product', $request->get('id_product'))->first();

            if ( empty($stock) ) {
                $stock = ProductStock::create($arr);
            }
        } else {
            $stock = ProductStock::create($arr);
        }

        $product_model->id_product_stock = $stock->id;
        $product_model->save();

        $quantity = DB::table('products_model')->where('id_product_stock', $stock->id)->count();
        $stock->quantity = $quantity;
        $stock->save();

        $product_model->sku = $sku->sku;
        $product_model->quantity = $quantity;
        $product_model->save();

        return redirect('/');
    }

}
