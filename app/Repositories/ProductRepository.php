<?php

namespace App\Repositories;
use Illuminate\Support\Facades\Auth;
use App\Models\Product\ProductModel;
use App\Models\Integrations\PaymentIntegrationModel;

class ProductRepository
{

    public function productStore()
    {
        return ProductModel::all();
    }

    public function productPayment()
    {
        return PaymentIntegrationModel::where('user_id', Auth::id())->get();
    }


    public function createProduct(array $productData)
    {
        $product = new ProductModel();
        $product->user_id = Auth::id();
        $product->name = $productData['name'];
        $product->description = $productData['description'];
        $product->amount = $productData['amount'];
        $product->qty = $productData['qty'];
        $product->save();
        return "Product added successfully";
    }


    public function productDetailDescription(int $product)
    {
        $product = ProductModel::where('id', $product)->first();
        return $product;
    }


}
