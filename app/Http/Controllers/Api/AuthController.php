<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\User; 
use Illuminate\Support\Facades\Auth; 
use Validator;
class AuthController extends Controller 
{
public $successStatus = 200;
/** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function login(){ 
        if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){ 
            $user = Auth::user(); 
            $success['token'] =  $user->createToken('MyApp')-> accessToken; 
            return response()->json(['success' => $success], $this-> successStatus); 
        } 
        else{ 
            return response()->json(['error'=>'Unauthorised'], 401); 
        } 
    }
/** 
     * Register api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function register(Request $request) 
    { 
        $validator = Validator::make($request->all(), [ 
            'name' => 'required', 
            'email' => 'required|email', 
            'password' => 'required', 
            'c_password' => 'required|same:password', 
        ]);
if ($validator->fails()) { 
            return response()->json(['error'=>$validator->errors()], 401);            
        }
$input = $request->all(); 
        $input['password'] = bcrypt($input['password']); 
        $user = User::create($input); 
        $success['token'] =  $user->createToken('MyApp')-> accessToken; 
        $success['name'] =  $user->name;
return response()->json(['success'=>$success], $this-> successStatus); 
    }
/** 
     * details api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function details() 
    { 
        $user = Auth::user(); 
        return response()->json(['success' => $user], $this-> successStatus); 
    } 
}
// use Illuminate\Http\Request;
// use App\User;
// use Illuminate\Support\Facades\Hash;
// use App\Http\Controllers\Controller;
// use GuzzleHttp\Client;

// class AuthController extends Controller {

//     public function register(Request $request) {


//         $request->validate([
//             'email' => 'required',
//             'name' => 'required',
//             'password' => 'required'
//         ]);

//         $user = new User();
//         $user->name = $request->name;
//         $user->email = $request->email;
//         $user->password = bcrypt($request->password);
//         $user->save();


//         $http = new Client;

//         $response = $http->post('http://localhost:8000/oauth/token', [
//             'form_params' => [
//                 'grant_type' => 'password',
//                 'client_id' => '2',
//                 'client_secret' => '8ES6QbImxUTWYWD7b1pBIG3Q4hdiCJ8J7GGJb4q9',
//                 'username' => $user->email,
//                 'password' => $user->password,
//                 'scope' => '',
//             ],
//         ]);
//         //return json_decode((string) $response->getBody(), true);
//         return response(['data' => json_decode((string) $response->getBody(), true)]);
//     }

//     public function login(Request $request) {
//         $request->validate([
//             'email' => 'required',
//             'password' => 'required'
//         ]);

//         $user = User::where('email', $request->email)->first();
//         if (!$user) {
//             return response(['status' => 'error', 'message' => 'User not found']);
//         }

//         if (Hash::check($request->password, $user->password)) {
//             $http = new Client;
//             $response = $http->post(url('oauth/token'), [
//                 'form_params' => [
//                     'grant_type' => 'password',
//                     'client_id' => '2',
//                     'client_secret' => '8ES6QbImxUTWYWD7b1pBIG3Q4hdiCJ8J7GGJb4q9',
//                     'username' => $request->email,
//                     'password' => $request->password,
//                     'scope' => '',
//                 ],
//             ]);
//             return response(['data' => json_decode((string) $response->getBody(), true)]);
//         } else {
//             return response(['message' => 'password not match', 'status' => 'error']);
//         }
//     }

//     // public function refreshToken() {
//     // 	$http = new Client;
//     // 	$response = $http->post(url('oauth/token'), [
//     // 	    'form_params' => [
//     // 	        'grant_type' => 'refresh_token',
//     // 	        'refresh_token' => request('refresh_token'),
//     // 	        'client_id' => '2',
//     // 	        'client_secret' => '8ES6QbImxUTWYWD7b1pBIG3Q4hdiCJ8J7GGJb4q9',
//     // 	        'scope' => '',
//     // 	    ],
//     // 	]);
//     // 	return json_decode((string) $response->getBody(), true);
//     // }
// }
