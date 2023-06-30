<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Adduser;
use App\Models\ProductModel;

$db = \Config\Database::connect();

class Two extends BaseController
{
    public $register;
    public $session;

    public function __construct()
    {
        helper('form');
        helper('model');

        $this->register= new Adduser();

        $this->session= \Config\Services::session();
    }
    public function index()
    {
        $model= new Adduser();
        $data['alldata']=$model->get();
        
        return view('One', $data);
    }


    
}
