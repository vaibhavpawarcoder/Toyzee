<?php

namespace App\Controllers;

use App\Models\ProductModel;

class BuyProduct extends BaseController
{
    public function __construct()
    {
        helper('form');
        helper('model');
    }
    public function index()
    {
        // $productView = new ProductModel();
        // $data['product'] = $productView->find($ID);

        echo view('BuyProduct');
    }
    public function product($ID){
        $productView = new ProductModel();
        $data['product'] = $productView->find($ID);
        echo view('BuyProduct', $data);
    }
}
