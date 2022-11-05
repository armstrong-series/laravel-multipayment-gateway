<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;
use Validator;
use App\Repositories\ProductRepository;

class StoreController extends Controller
{

    private $storeRepository;

    public function __construct(ProductRepository $storeRepository)
    {
        $this->storeRepository = $storeRepository;
        $this->middleware('auth');
    }



    public function itemLists()
    {

        $data = [
            "page" => "store",
            "products" => $this->storeRepository->productStore()
        ];

        return view('App.Store.store', $data);
    }




    public function productDetails($productId)
    {

        $product = $this->storeRepository->productDetailDescription(($productId));
        if(!$product){
            $message = "Unknown Product";
            return response()->json(["message" => $message], 400);
        }

        $data = [
            "payments" => $this->storeRepository->productPayment(),
            "product" => $product,
            "page" => "store"
        ];
        return view('App.Store.product-details', $data);


    }

    public function addProductToStore(Request $request)
    {
        try {

            $validator = $this->validator($request->all());
            if ($validator->fails()) {
                $message = $validator->errors()->all();
                foreach ($message as $messages) {
                    return response()->json(['message' => $messages], 400);
                }
            }
            $response = $this->storeRepository->createProduct($request->all());
            return response()->json(["message" => $response, "product" => $this->storeRepository], 200);
        } catch (Exception $error) {
            Log::info("Error in Product" . $error->getMessage());
        }
    }

    public function addProductToCart(Request $request)
    {

    }

    public function payment()
    {
        $data = [
            "page" => "store"
        ];
        return view('App.Store.payment', $data);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string',
            'description' => 'required',
            'amount' => 'required|integer'
        ]);
    }
}
