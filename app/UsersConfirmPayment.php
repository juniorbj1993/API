<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Input;

class UsersConfirmPayment extends Model
{
    protected $fillable = ["tokenuser","pay","date"];
    public function allUsers(){
        return self::all();
    }
    public function saveUsers(){
        $input = Input::all();
        $user = new UsersConfirmPayment();
        $user -> fill($input);
        $user -> save();
        return $user;

    }
    public function getUsers($id){

        $user = self::where('tokenuser',$id)->get();
        if(count($user)==0){
            return false;
        }
        return $user;
    }
    public function updateUsers($id){
        $user = self::where('tokenuser',$id)->get()->first();
        if(!$user){
            return false;
        }

        $input = Input::all();
        $user -> fill($input);
        $user -> update();
        return $user;

    }
    public function deleteUsers($id){
        $user = self::where('tokenuser',$id);
        // $user = self::find($id);
        if(!$user){
            return false;
        }
        return $user->delete();

    }

}
