<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\BaseController as BaseController;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator ;

class RegisterController extends BaseController
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6',
            'confirm_password'=>'required|same:password',
        ]);

        if($validator->fails()){
            return $this->sendError('Validation Error.',$validator->errors());
        }   

        $input=$request->all();
        $input['password']=bcrypt($input['password']);
        $user= \App\Models\User::create($input);
        $success['token']=$user->createToken('MyApp')->plainTextToken;
        $success['name']=$user->name;

        return $this->sendResponse($success,'User registered successfully.');
    }
    public function login(Request $request)
    {
     
    }       

}
