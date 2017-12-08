<?php
/**
 * Created by PhpStorm.
 * User: saurabh
 * Date: 25/11/17
 * Time: 11:02 PM
 */

namespace App\Http\Controllers;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Response as ReturnResponse;


class BaseApiController extends Controller
{

    public static function successResponse($data=[], $message = '', $errors = [], $statusCode = Response::HTTP_OK){
        $result = ['status' => 1, 'message'=>$message, 'errors'=>$errors, 'data'=>$data];
        return ReturnResponse::json($result, $statusCode)->header('Content-Type', "application/json");
    }

    public static function errorResponse($data=[], $message = '', $errors = [], $statusCode = Response::HTTP_INTERNAL_SERVER_ERROR){
        $result = ['status' => 0, 'message'=>$message, 'errors'=>$errors, 'data'=>$data];
        return ReturnResponse::json($result, $statusCode)->header('Content-Type', "application/json");
    }

    public function returnResponse($result){
        if ($result['status']==1){
            return BaseApiController::successResponse($result['data'],$result['message']);
        }else{
            return BaseApiController::errorResponse($result['data'],$result['message']);
        }
    }
}