<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use App\User;
use DB;
use Validator;
class UserController extends Controller
{
    private $user;
    public function __construct(){
     //$this->user=new User();
    }
    public function test(){
     
      return Response::json([
                'hello here we go'
            ],200);
    }

    public function registerUser(Request $request){
       
       //Validate All Requests
   
        $validator = Validator::make($request->all(), [
            'firstname' => 'required|alpha',
            'lastname' => 'required|alpha',
            'phonenumber' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);
        if ($validator->fails()) {
            return Response::json([
                'data' => [
                'error'=>$validator->errors()->getMessages()

                    ]
            ],400);
        }
    

     $userData=[
            'firstname'=>$request->firstname,
            'lastname'=>$request->lastname,
            'phonenumber'=>$request->phonenumber,
            'password'=>\Hash::make($request->password),
            'email'=>$request->email,
         ];

         try{

        $this->user->createUser($userData);
        return response()->json([
               'success' => [
                  'message' => "user registered successfully"
               ]
            ],200);

        }catch(Exception $e){
        return response()->json([
               'error' => [
                  'message' => "something went wrong"
               ]
            ],400);
    }
    }

    public function updateUser(Request $request, $userid){
         
       $profile = User::find($userid);
        if(!$profile){
            return response()->json(
                ['message' => 'User not found'], 404
            );
        }

        //handle file upload


        $profile->firstname = $request->firstname;
        $profile->lastname = $request->lastname;
        $profile->phonenumber = $request->phonenumber;

        $profile->password = \Hash::make($request->password);
        $profile->email = $request->email;
        $profile->roleid = $request->roleid;
        $profile->save();
        return response()->json(['updateuser'=>$profile], 201);
    }

   public function allUsers()
    { 
        $allusers = User::all();
        return response()->json($allusers, 200);
    }
    
    
    public function getuser(Request $request){
        $propertyid=null;
       $user=$request->user();
       
    return response()->json([
        'id' => $user->id,
        'name' => $user->lastname." ".$user->firstname,
        'email' => $user->email,
        'phonenumber'=>$user->phonenumber,
        'created_at'=>$user->created_at,
        
    ]);
   
    }
   

    
    
    

    
    public function UpdateUserPassword(Request $request, $userid){
         $profile = User::find($userid);
        if(!$profile){
            return response()->json(
                ['message' => 'User not found'], 404
            );
        }
        $profile->password = \Hash::make($request->password);
        $profile->save();
        return response()->json(['updateuser'=>$profile], 201);
    }

}
