<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\SmsCode;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthApiController extends Controller
{
    public function sendSms(Request $request)
    {
        $mobile = $request->input('mobile');
        $checkLastSms = SmsCode::checkTwoMinute($mobile);
        if(!$checkLastSms) {
            $code = rand(1111, 9999);
            SmsCode::createSmsCode($mobile, $code);
            return Response()->json([
                'result' => true,
                'message' => "send sms is done",
                'data' => [
                    'mobile' => $mobile,
                    'code' => $code
                ]
            ], 201);
        }else{
            return Response()->json([
                'result'=>false,
                'message'=>"please wait for two minutes",
                'data'=>[]
            ],403);
        }
    }
    public function verifySms(Request $request)
    {
        $mobile = $request->input('mobile');
        $code = $request->input('code');

        $check = SmsCode::checkSend($mobile, $code);

        if ($check){
            $user = User::query()->where('phone_number', $mobile)->first();


            if($user) {
                return Response()->json([
                    'result' => true,
                    'message' => "user registered before",
                    'data' => [
                        'id' => $user->id,
                        'token' => $user->createToken("new Token")->plainTextToken
                    ]
                ], 201);
            }else{
                $user = User::query()->create([
                    'phone_number'=>$mobile,
                    'password'=> Hash::make(rand(1111,9999)),
                ]);

                return Response()->json([
                    'result'=>false,
                    'message'=>"new user created",
                    'data'=>[
                        'id'=>$user->id,
                        'token'=>$user->createToken("new Token")->plainTextToken
                    ]
                ],403);

            }

        }

    }
}
