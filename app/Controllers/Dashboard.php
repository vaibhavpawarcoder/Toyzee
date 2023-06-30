<?php

namespace App\Controllers;
use App\Models\Adminmodel;

class Dashboard extends BaseController
{

    public $loginModel;
    public function __construct()
    {
        $this->loginModel= new Adminmodel();
    }
    public function index()
    {
        if(!session()->has('user_login')){
            return redirect()->to(base_url().'AdminLogin');
        }

        $adminid=session()->get('user_login');

        $data['AdminInfo']=  $this->loginModel->getLoggedInUserData($adminid);
        
        // print_r($Admin_info);
        
         echo view('Dashboard', $data);



        // $parser= \Config\Services::parser();
        // $data=[
        //     'title' => 'vaibhav',
        //     'body' => 'this is body',
        //     'footer' => 'this is footer section',
        //     'date'=>'25-05-2023',
        //     'mobile'=>'7387545206'
        // ];
        // return $parser-> setData($data) -> render('viewFilter');
    }
}
