<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    protected $table = 'users';
    protected $have_role;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'firstname','lastname','email','phonenumber' ,'password',
    ];


    public function findForPassport($identifier) {
        return $this->orWhere('email', $identifier)->orWhere('phonenumber', $identifier)->first();
   }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @parmeters userdata
     */

     public function createUser($userData){
        
      User::create($userData);

    }


}
