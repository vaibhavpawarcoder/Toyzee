<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\Categorymodel;
use App\Models\SubCate;
use App\Models\Brandmodel;
use App\Models\Agemodel;

class EditProduct extends BaseController
{
    public function  __construct()
    {
        helper('form');
        helper('model');
    }

    public function index()
    {
        $data = [];
        $data['validation'] = null;
        $rules = [
            'product' => 'required|is_unique[product.product]',
            // 'specification' => 'required',
            'subcategory' => 'required',

            'brand' => 'required',
            'age' => 'required',
            'mrp' => 'required|numeric',
            'offer' => 'required|numeric',
            
            'quentity' => 'required|numeric',
            'avibility' => 'required',
            'shortinfo' => 'required',
            'delivery'=> 'required',

            'pic1' => 'uploaded[pic1]|max_size[pic1,1024]|ext_in[pic1,png,jpg,gif,jpeg,PNG]',
            'pic2' => 'uploaded[pic2]|max_size[pic2,1024]|ext_in[pic2,png,jpg,gif,jpeg,PNG]',
            'pic3' => 'uploaded[pic3]|max_size[pic3,1024]|ext_in[pic3,png,jpg,gif,jpeg,PNG]',
            'pic4' => 'uploaded[pic4]|max_size[pic4,1024]|ext_in[pic4,png,jpg,gif,jpeg,PNG]',

            // 'pic1' => 'uploaded[pic1]|max_size[pic1,1024]',
            // 'pic2' => 'uploaded[pic2]|max_size[pic2,1024]',
            // 'pic3' => 'uploaded[pic3]|max_size[pic3,1024]',
            // 'pic4' => 'uploaded[pic4]|max_size[pic4,1024]',

            
            
            // 'origin' => 'required',
            // 'content' => 'required',
            // 'offer' => 'required',
            
            // 'manufatured' => 'required',
            // 'markreted' => 'required',
            // 'weight' => 'required',
            
            // 'material' => 'required',
            // 'battery' => 'required',
            // 'EAN' => 'required',
            
            // 'customerCare' => 'required',

        ];
        if ($this->request->getMethod() == 'post') {
            if ($this->validate($rules)) {

                echo "Save data";


                $ProductModel = new ProductModel();
                //first Picture
                $file=$this->request->getFile('pic1');
                if($file->isValid() && ! $file->hasMoved())
                {
                    $fileName= $file->getRandomName();
                    $file->move('ProductImage', $fileName);
                    
                };

                //second Picture
                $file=$this->request->getFile('pic2');
                if($file->isValid() && ! $file->hasMoved())
                {
                    $fileNametwo= $file->getRandomName();
                    $file->move('ProductImage', $fileNametwo);
                    
                };

                //three Picture
                $file=$this->request->getFile('pic3');
                if($file->isValid() && ! $file->hasMoved())
                {
                    $fileNamethree= $file->getRandomName();
                    $file->move('ProductImage', $fileNamethree);
                    
                };

                //four Picture
                $file=$this->request->getFile('pic4');
                if($file->isValid() && ! $file->hasMoved())
                {
                    $fileNamefoure= $file->getRandomName();
                    $file->move('ProductImage', $fileNamefoure);
                    
                };

                
                // ListPrice = SellingPrice (100/100−discount%)

                $listPrice=$this->request->getPost('offer') * $this->request->getPost('mrp')/100;
                
                $specification=$this->request->getPost('product').rand(99, 99999);

                $codesubstr= substr($specification,0,4);
                $add="$codesubstr".rand(99, 99999);
                $save = [
                    'product' => $this->request->getPost('product'),
                    'specification' => $add,
                    'category' => $this->request->getPost('category'),

                    'subcategory' => $this->request->getPost('subcategory'),
                    'brand' => $this->request->getPost('brand'),
                    'age' => $this->request->getPost('age'),

                    'mrp' => $this->request->getPost('mrp'),
                    'offer' => $this->request->getPost('offer'),
                    'disscount' =>$this->request->getPost('mrp') - $listPrice ,
                    'quentity' => $this->request->getPost('quentity'),
                    
                    'avibility' => $this->request->getPost('avibility'),
                    'shortinfo' => $this->request->getPost('shortinfo'),
                    
                    'delivery' => $this->request->getPost('delivery'),
                    
                    'ckeditor' => $this->request->getPost('ckeditor'),


                    'pic1'=> $fileName,
                    'pic2'=> $fileNametwo,
                    'pic3'=> $fileNamethree,
                    'pic4'=> $fileNamefoure,
                ];

                $ProductModel->save($save);
                return redirect()->to(base_url('ViewProduct'))->with('status', 'Product Adddes Successfully');
            } else {
                $data['validation'] = $this->validator;
            }
        }
                //feach data from database
                
                $Categorymodel = new Categorymodel();
                $data['Categorymodel'] = $Categorymodel->findAll();


                $SubCate = new SubCate();
                $data['SubCate'] = $SubCate->findAll();
        
        
                $Brandmodel = new Brandmodel();
                $data['Brandmodel'] = $Brandmodel->findAll();

                
                $Agemodel = new Agemodel();
                $data['Agemodel'] = $Agemodel->findAll();
                // return $parser-> setData($data) -> render('viewFilter');

        return view('editProduct', $data);
    }


    // inser Data in Brand
    public function  addProduct()
    {


        $ProductModel = new ProductModel();

        $data = [
            'brand' => $this->request->getPost('brand'),
        ];

        $ProductModel->save($data);
        return redirect()->to(base_url('EditProduct'))->with('status', 'Product Adddes Successfully');
    }
}
