<?php

namespace App\Controllers;
use  App\Models\AdminLogmodel;
use App\Models\Adminmodel;

class AdminLogin extends BaseController
{
    public $login;
    public $session;
    public function __construct()
    {
        helper('form');
        $this->login =new Adminmodel();
        $this->session = session();
    }
    public function index(){
        $data=[];
        if($this->request->getMethod()=='post'){
            $rules = [
                
    
                'email' => [
                    'label'  => 'Rules.email',
                    'rules'  => 'required|valid_email',
                    'errors' => [
                        'required' => 'Rules.Must Enter email  required',
                    ]
                ],
    
                'password' => [
                    'label'  => 'Password',
                    'rules'  => 'required|min_length[4]|max_length[15]',
                    'errors' => [
                        'min_length' => 'Your {field} is too short. You want to get hacked?',
                        'max_length' => 'Your Password to long'
                    ],
                ],
            ];

            if($this->validate($rules))
            {
                $email= $this->request->getVar('email');
                $password= $this->request->getVar('password');

                $userdata=  $this->login->verifyEmail($email);
                
                if($userdata){
                    // print_r($userdata);
                    if(password_verify($password, $userdata['password'])){

                        $this->session->set('user_login', $userdata['admin_id'] );

                        return redirect()-> to(base_url().'Dashboard');

                    }else{
                        $this->session->setTempdata('error', 'Wrong Password it is does not exit in database');
                    }
                }else{
                    $this->session->setTempdata('error', 'Wrong Email it is does not exit in database');
                }

            }else{
                $data['validation']= $this->validator;
            }
        }
        return view('adminLogin', $data);
    }

}
