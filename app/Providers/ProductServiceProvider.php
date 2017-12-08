<?php

namespace App\Providers;

use App\Models\Product;

/**
 * ProductServiceProvider class contains methods for product management
 */
class ProductServiceProvider extends BaseServiceProvider {

    public function __construct()
    {
    }

    /**
     * products list
     * @return type
     */
    public function getProducts() {
        try {
            $products = Product::select('id','productName','brand')->get();
                UserServiceProvider::$data['status'] = 1;
                UserServiceProvider::$data['data'] = ['products' => $products];
                UserServiceProvider::$data['message'] = trans('messages.products_list');

        } catch (\Exception $e) {
            $this->logError(__CLASS__,__METHOD__,$e->getMessage());
        }
        return UserServiceProvider::$data;
    }


    /**
     * update product
     * @return type
     */
    public function updateProduct($request) {
        try {
            $isProductUpdated = Product::where('id',$request->productId)->update(['productName'=>$request->productName]);
            if($isProductUpdated){
                UserServiceProvider::$data['status'] = 1;
                UserServiceProvider::$data['message'] = trans('messages.product_updated');
            }

        } catch (\Exception $e) {
            $this->logError(__CLASS__,__METHOD__,$e->getMessage());
        }
        return UserServiceProvider::$data;
    }

    /**
     * delete product
     * @return type
     */
    public function deleteProduct($request){
        try {
            $isProductUpdated = Product::where('id',$request->productId)->delete();
            if($isProductUpdated){
                UserServiceProvider::$data['status'] = 1;
                UserServiceProvider::$data['message'] = trans('messages.product_deleted');
            }

        } catch (\Exception $e) {
            $this->logError(__CLASS__,__METHOD__,$e->getMessage());
        }
        return UserServiceProvider::$data;
    }


}