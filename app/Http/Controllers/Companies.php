<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class Companies extends Controller
{
   function save(Request $req)
   {
//print_r($req->input());
$user=new User;
$user->user_name=$req->user_name;
$user->password=$req->password;
$user->title=$req->title;
echo $user->save();
   }
    
}
