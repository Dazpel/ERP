<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    //--------------------para que no valide el remember token al hacer logout
    public function getRememberToken()
 {
   return null; // not supported
 }

 public function setRememberToken($value)
 {
   // not supported
 }

 public function getRememberTokenName()
 {
   return null; // not supported
 }
//--------------------para que no valide el remember token al hacer logout
 /**
  * Overrides the method to ignore the remember token.
  */
 public function setAttribute($key, $value)
 {
   $isRememberTokenAttribute = $key == $this->getRememberTokenName();
   if (!$isRememberTokenAttribute)
   {
     parent::setAttribute($key, $value);
   }
 }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];
}
