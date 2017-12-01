<?php
/**
 * Created by PhpStorm.
 * User: saurabh
 * Date: 25/11/17
 * Time: 10:24 PM
 */

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;


class BaseServiceProvider  extends ServiceProvider
{
    public static $data = [
        'data' => [],
        'message' => '',
        'status' => 0
    ];

    public function logError($class, $method, $errorMessage){
        BaseServiceProvider::$data['message'] = trans('messages.server_error');
        BaseServiceProvider::$data['status'] = 0;
        Log::error( $class ."::" . $method . "  " . $errorMessage);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register() {
        //
    }

}