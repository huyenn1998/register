<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $table = "users";
    protected $fillable = ['tenant_code','username','password','email','name','avatar','tel','address','descripton'];
    

}
