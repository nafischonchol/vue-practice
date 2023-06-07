<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\LoginRequest;
use Hash;
use App\Exceptions\CredentialsMismatchException;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        try 
        {
            $user = User::where("email",$request->email)->first();
            if (!$user || !Hash::check($request->password, $user->password))
                throw new CredentialsMismatchException();
           
            $token = $user->createToken('my-app-token')->plainTextToken;
            $data = array();
            $data['id'] = $user->id;
            $data["email"] = $user->email;
            $data["name"] = $user->name;
            $data['token'] =$token;
           
            return response()->json(['message' => 'Login Success','status'=>200,'data'=>$data]);
        }
        catch (\Illuminate\Validation\ValidationException $e) {
        
            $errors = $e->validator->errors();
         
            return response()->json([
                'errors' => $errors,
            ], 422);
        }
        catch (CredentialsMismatchException $e) {
            return response()->json(['message' => $e->getMessage()], $e->getCode());
        }
        catch (\Exception $e) 
        {
            Log::error($e->getMessage());
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
