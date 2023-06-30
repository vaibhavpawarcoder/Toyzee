<?php

namespace App\Controllers;

use App\Models\Adminmodel;
use App\Models\Agemodel;
use App\Models\ProductModel;
use App\Models\SubCate;
use App\Models\Brandmodel;

class Search extends BaseController
{

    public $loginModel;
    public function __construct()
    {
        $this->loginModel = new Adminmodel();
    }
    public function index($ID)
    {

        $subcategory= new SubCate();
        $data['subCate']= $subcategory->findAll();

        $brand= new Brandmodel();
        $data['brand']= $brand->findAll();

        $age = new Agemodel();
        $data['age'] = $age->findAll();

        $product = new ProductModel();
        $data['product'] = $product->findAll();

        // $this->db->select('*');
        // $this->db->from('Students');
        // $this->db->limit(50);
        // $query = $this->db->get();

        $random = new ProductModel($ID);
        $random->limit(2);
        $data['products'] = $random->find($ID);

        echo view('search', $data);
    }
}
