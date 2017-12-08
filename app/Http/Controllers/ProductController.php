<?php

namespace App\Http\Controllers;

use App\Http\Requests\DeleteProductRequest;
use App\Http\Requests\UpdateProductRequest;
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
        return $this->returnResponse($result);
    }

    public function update(UpdateProductRequest $request){
        $result = $this->productServiceProvider->updateProduct($request);
        return $this->returnResponse($result);
    }


    public function delete(DeleteProductRequest $request){
        $result = $this->productServiceProvider->deleteProduct($request);
        return $this->returnResponse($result);
    }

}