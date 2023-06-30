<?php

namespace App\Controllers;

use App\Models\Adminmodel;
use App\Models\Agemodel;
use App\Models\ProductModel;
use App\Models\SubCate;
use App\Models\Brandmodel;

class ProductList extends BaseController
{

    public $loginModel;
    public function __construct()
    {
        helper('model');
    }
    public function index()
    {
        if ($this->request->getMethod() == 'post') {
            $file = $this->request->getFile('pic');
            echo "<pre>";
            print_r($file);
        }

        $subcategory= new SubCate();
        $data['subCate']= $subcategory->findAll();

        $brand= new Brandmodel();
        $data['brand']= $brand->findAll();

        $age = new Agemodel();
        $data['age'] = $age->findAll();
        
        $product = new ProductModel();
        $data['product'] = $product->findAll();


        // return $parser-> setData($data) -> render('viewFilter');
        echo view('productList', $data);
    }
}
