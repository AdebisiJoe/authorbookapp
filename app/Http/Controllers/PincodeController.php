<?php

namespace App\Http\Controllers;

use App\pincode;
use Illuminate\Http\Request;

class PincodeController extends Controller
{

    private $user;
    public function __construct(){
     $this->user=new User();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //get user id
        $user_id=$this->user()->id;

        //generate unique code
        
        

        //save code 
    }

    public function getlastid(){
        $lastid=DB::select('select max(id) as maxID from pincode');
        
        //echo $lastid->maxID;
        foreach ($lastid as $key => $v) {
          # code...
         $lastid=$v->maxID;
        }
        if ($lastid==null) {
          # code...
          return 1;
        } else {
          # code...
          return  $lastid+1;
        }
        
        
        }

        public function exists_in_db($pin)
        {

            $pincount= DB::table('pincode')->where('pin','=',$pin)->count();
             if ($pincount>0) {
              return true;
            }
            else {
              return false;
            }

        }


        function getRandomString($n) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $randomString = '';
          
            for ($i = 0; $i < $n; $i++) {
                $index = rand(0, strlen($characters) - 1);
                $randomString .= $characters[$index];
            }
          
            return $randomString;
        }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\pincode  $pincode
     * @return \Illuminate\Http\Response
     */
    public function show(pincode $pincode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\pincode  $pincode
     * @return \Illuminate\Http\Response
     */
    public function edit(pincode $pincode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\pincode  $pincode
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pincode $pincode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\pincode  $pincode
     * @return \Illuminate\Http\Response
     */
    public function destroy(pincode $pincode)
    {
        //
    }
}
