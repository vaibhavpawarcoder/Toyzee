<?php

namespace App\Controllers;

use \CodeIgniter\Controller;
use App\Models\Automodel;

class Auto extends BaseController
{
    public $useModel;
    public $userAdd;

    public function __construct()
    {
        $this->useModel= new Automodel();
        helper('form');
        helper('model');

        $this->userAdd= new Automodel();
    }
    public function index(){

       // $data=$this->useModel->findAll();

       $data['users']=$this->useModel->findAll();
       return view('viewUser', $data);
        

    }

    

    public function addUser(){
        if($this->request->getMethod()== 'post'){
            $data=[
                'name'=> $this->request->getVar('name',FILTER_SANITIZE_STRING),
                'email'=> $this->request->getVar('email',FILTER_SANITIZE_EMAIL),
                'pass'=> $this->request->getVar('pass',FILTER_SANITIZE_STRING),
            ];
            if($this->userAdd->save($data) == true){
                echo "recorde ADD";
            }
        }
        return view('userADD', ['errors' => $this->userAdd->error()]);
    }




    public function viewUser(){

    }

    public function editUser(){

    }

    public function deletUser(){

    }
}

?>