<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsersConfirmPayment;

class ApiRestController extends Controller
{
    protected $user = null;

    public function __construct(UsersConfirmPayment $user){
        $this->user = $user;
    }
    public function allUsers(){
        return $this->user->allUsers();
    }
    public function getUsers($id){
        $user = $this->user->getUsers($id);
        if(!$user){
            return ['response'=>'Usuário não encontrado'];
        }
        return $user;
    }
    public function saveUsers(){
        return $this->user->saveUsers();
    }
    public function deleteUsers($id){
        return 'deletar usuario'.$id;
    }
    public function updateUsers($id){
        return 'atualizar usuario'.$id;
    }
}
