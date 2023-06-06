<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'email' => 'required',
            'password' => 'required'
        ]);

        if($validator->fails())
        {
            $response = [
                'success' => false,
                'message' => $validator->errors()
            ];
            return response()->json($response,400);
        };

        $input  = $request->all();
        if(Auth::attempt(['email' => $input['email'], 'password' => $input['password']]))
        {
            $user = Auth::user();
            $success['token'] = $user->createToken("MyApp")->plainTextToken;
            $success['name'] = $user->name;
            $response= [
                'success' => true,
                'data'  => $success,
                'msessage' => 'Login success'
            ];
            return response()->json($response,200);
        }
        else
        {
            $response = [
                'success' => false,
                'message' => "Authenticaion failed"
            ];
            return response()->json($response,401);
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        if($validator->fails())
        {
            $response = [
                'success' => false,
                'message' => $validator->errors()
            ];
            return response()->json($response,400);
        };

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['token'] = $user->createToken("MyApp")->plainTextToken;
        $success['name'] = $user->name;

        $response= [
            'success' => true,
            'data'  => $success,
            'msessage' => 'Register success'
        ];
        return response()->json($response,200);
    }
}
