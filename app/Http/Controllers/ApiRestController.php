<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsersConfirmPayment;
use Response;

class ApiRestController extends Controller
{
    protected $user = null;

    public function __construct(UsersConfirmPayment $user){
        $this->user = $user;
    }
    public function allUsers(){
        return response::json($this->user->allUsers(),200);
    }
    public function getUsers($id){
        $user = $this->user->getUsers($id);
        if(!$user){
            return response::json(['response'=>'Usuário não encontrado'], 400);
        }
        return response::json($user,200);
    }
    public function saveUsers(){
        return response::json($this->user->saveUsers(),201);
    }
    public function deleteUsers($id){
        $user = $this->user->deleteUsers($id);
        if(!$user){
            return response::json(['response'=>'Usuário não encontrado'], 400);
        }
        return response::json(['response'=>'Usuário deletado'],200);
    }
    public function updateUsers($id){
        $user = $this->user->updateUsers($id);
        if(!$user){
            return response::json(['response'=>'Usuário não encontrado'], 400);
        }
        return response::json($user,200);
    }
}
