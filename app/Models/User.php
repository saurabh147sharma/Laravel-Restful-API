<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    const APP_USER = 2;

    public function create($request,$password){
            return User::insertGetId(['name'=>$request->name,'email'=>$request->email,'password'=>$password,'password'=>$password]);
    }
}
