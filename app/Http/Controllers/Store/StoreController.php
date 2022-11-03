<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;
use Validator;
use App\Models\Product\ProductModel;

class StoreController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function itemLists()
    {

        $data = [
            "page" => "store"
        ];

        return view('App.Store.store', $data);

    }



    public function addProductToStore(Request $request)
    {
        try {
            //code...
        } catch (Exception $error) {
           Log::info("Error in Product" .$error->getMessage());
        }
    }
}
