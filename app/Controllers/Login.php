<?php

namespace App\Controllers;

use App\Models\User;

use App\Models\Adminmodel;
use App\Models\Agemodel;
use App\Models\ProductModel;
use App\Models\SubCate;
use App\Models\Brandmodel;


class Login extends BaseController
{
    public function __construct()
    {
        helper('form');
        helper('model');
    }
    public function index(){


        $subcategory= new SubCate();
        $data['subCate']= $subcategory->findAll();

        $brand= new Brandmodel();
        $data['brand']= $brand->findAll();

        $age = new Agemodel();
        $data['age'] = $age->findAll();

        return view('login', $data);
    }
}

?>