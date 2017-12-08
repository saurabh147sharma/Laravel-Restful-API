<?php

namespace App\Http\Controllers\V1\Product;

use App\Http\Controllers\BaseApiController;
use App\Providers\ProductServiceProvider;

class ProductController extends BaseApiController
{
    public $productServiceProvider;
    public function __construct()
    {
        $this->productServiceProvider = new ProductServiceProvider();
    }

    public function get() {
        $result = $this->productServiceProvider->getProducts();
        if ($result['status']==1){
            return BaseApiController::successResponse($result['data'],$result['message']);
        }else{
            return BaseApiController::errorResponse($result['data'],$result['message']);
        }
    }

}