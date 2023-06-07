<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\LoginRequest;
use Hash;
class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        try 
        {
            // $request->validate([
            //     'email' => 'required|email',
            //     'password' => 'required|min:8',
            // ]);
            
            $user = User::where("email",$request->email)->first();
            if (!$user || !Hash::check($request->password, $user->password))
                throw new \Exception("These credentials do not match our records");
           
            $token = $user->createToken('my-app-token')->plainTextToken;
            $data = array();
            $data['id'] = $user->id;
            $data["email"] = $user->email;
            $data["name"] = $user->name;
            $data['token'] =$token;
           
            return response()->json(['message' => 'Login Success','status'=>200,'data'=>$data])->withCookie(cookie('scantumToken', $token, config('session.lifetime'), null, null, config('session.secure'), true));;
        }
        catch (\Illuminate\Validation\ValidationException $e) {
        
            $errors = $e->validator->errors();
         
            return response()->json([
                'errors' => $errors,
            ], 422);
        }
        catch (\Exception $e) 
        {
            return response()->json(['message' => 'An error occurred'], 500);
        }
    }

    // public function register(Request $request)
    // {
    //     $validator = Validator::make($request->all(),[
    //         'name' => 'required',
    //         'email' => 'required',
    //         'password' => 'required'
    //     ]);

    //     if($validator->fails())
    //     {
    //         $response = [
    //             'success' => false,
    //             'message' => $validator->errors()
    //         ];
    //         return response()->json($response,400);
    //     };

    //     $input = $request->all();
    //     $input['password'] = bcrypt($input['password']);
    //     $user = User::create($input);
    //     $success['token'] = $user->createToken("my-app-token")->plainTextToken;
    //     $success['name'] = $user->name;

    //     $response= [
    //         'success' => true,
    //         'data'  => $success,
    //         'msessage' => 'Register success'
    //     ];
    //     return response()->json($response,200);
    // }
}
