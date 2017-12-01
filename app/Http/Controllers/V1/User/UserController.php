<?php
/**
 * Created by PhpStorm.
 * User: saurabh
 * Date: 26/11/17
 * Time: 12:45 AM
 */

namespace App\Http\Controllers\V1\User;

use App\Http\Controllers\BaseApiController;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Providers\UserServiceProvider;

class UserController extends BaseApiController
{
    public $userServiceProvider;
    public function __construct()
    {
        $this->userServiceProvider = new UserServiceProvider();
    }

    public function create(RegisterRequest $request) {
        $result = $this->userServiceProvider->registerUser($request);
        if ($result['status']==1){
            return BaseApiController::successResponse($result['data'],$result['message']);
        }else{
            return BaseApiController::errorResponse($result['data'],$result['message']);
        }
    }

    public function login(LoginRequest $request) {
        $result = $this->userServiceProvider->login($request);
        if ($result['status']==1){
            return BaseApiController::successResponse($result['data'],$result['message']);
        }else{
            return BaseApiController::errorResponse($result['data'],$result['message']);
        }
    }
}