<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessToken extends Model
{
    protected $table = 'access_tokens';

    public function create($request, $accessToken, $userId){
        return AccessToken::insert(['userId'=>$userId,'deviceToken'=>$request->deviceToken,'deviceId'=>$request->deviceId, 'deviceType'=>$request->deviceType,'accessToken'=>$accessToken]);
    }
}
