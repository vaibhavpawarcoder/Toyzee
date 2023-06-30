<?php

namespace App\Controllers;

use App\Models\ProductModel;

class ViewProduct extends BaseController
{
    public function __construct()
    {
        helper('form');
        helper('model');
    }
    public function index()
    {
        if ($this->request->getMethod() == 'post') {
            $file = $this->request->getFile('pic');
            echo "<pre>";
            print_r($file);
        }
        $product = new ProductModel();
        $data['product'] = $product->findAll();


        // return $parser-> setData($data) -> render('viewFilter');
        echo view('viewProduct', $data);
    }

    //Edit And Update Data

    //feach data to update
    public function editProduct($ID)
    {

        $productView = new ProductModel();
        $data['product'] = $productView->find($ID);

        echo view('User/updateProduct', $data);
    }

    // Update feach data

    public function updateProduct($ID)
    {
        $productUpdate = new ProductModel();
        $pic_id = $productUpdate->find($ID);


        $rules = [
            'product' => 'required|is_unique[product.product]',
            'specification' => 'required',
            'subcategory' => 'required',

            'brand' => 'required',
            'age' => 'required',
            'mrp' => 'required|numeric',
            'offer' => 'required|numeric',

            'quentity' => 'required|numeric',
            'avibility' => 'required',
            'shortinfo' => 'required',
            

            'pic1' => 'uploaded[pic1]|max_size[pic1,1024]|ext_in[pic1,png,jpg,gif,jpeg,PNG]',
            'pic2' => 'uploaded[pic2]|max_size[pic2,1024]|ext_in[pic2,png,jpg,gif,jpeg,PNG]',
            'pic3' => 'uploaded[pic3]|max_size[pic3,1024]|ext_in[pic3,png,jpg,gif,jpeg,PNG]',
            'pic4' => 'uploaded[pic4]|max_size[pic4,1024]|ext_in[pic4,png,jpg,gif,jpeg,PNG]',

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



        //update first image 

        $file = $this->request->getFile('pic1');
        $old_file_one = $pic_id['pic1']; // old image path
        if ($file->isValid() && !$file->hasMoved()) {

            if (file_exists('ProductImage/' . $old_file_one)) {  //if image is selected
                unlink('ProductImage/' . $old_file_one);    //  chk if image is exit
            }
            $fileName = $file->getRandomName();
            $file->move('ProductImage', $fileName);        //  replace prv image
        } else {
            $fileName = $old_file_one;                    //  or else store prv image
        }


        //update second image 

        $file = $this->request->getFile('pic2');
        $old_file_two = $pic_id['pic2']; // old image path
        if ($file->isValid() && !$file->hasMoved()) {

            if (file_exists('ProductImage/' . $old_file_two)) {  //if image is selected
                unlink('ProductImage/' . $old_file_two);    //  chk if image is exit
            }
            $fileNametwo = $file->getRandomName();
            $file->move('ProductImage', $fileNametwo);        //  replace prv image
        } else {
            $fileNametwo = $old_file_two;                    //  or else store prv image
        }

        //update thired image 

        $file = $this->request->getFile('pic3');
        $old_file_three = $pic_id['pic3']; // old image path
        if ($file->isValid() && !$file->hasMoved()) {

            if (file_exists('ProductImage/' . $old_file_three)) {  //if image is selected
                unlink('ProductImage/' . $old_file_three);    //  chk if image is exit
            }
            $fileNamethree = $file->getRandomName();
            $file->move('ProductImage', $fileNamethree);        //  replace prv image
        } else {
            $fileNamethree = $old_file_three;                    //  or else store prv image
        }

        //update fourth image 

        $file = $this->request->getFile('pic4');
        $old_file_four = $pic_id['pic4']; // old image path
        if ($file->isValid() && !$file->hasMoved()) {

            if (file_exists('ProductImage/' . $old_file_four)) {  //if image is selected
                unlink('ProductImage/' . $old_file_four);    //  chk if image is exit
            }
            $fileNamefoure = $file->getRandomName();
            $file->move('ProductImage', $fileNamefoure);        //  replace prv image
        } else {
            $fileNamefoure = $old_file_four;                    //  or else store prv image
        }


        $listPrice=$this->request->getPost('offer') * $this->request->getPost('mrp')/100;

        $specification = $this->request->getPost('product') . rand(99, 99999);

        $codesubstr = substr($specification, 0, 4);
        $add = "$codesubstr" . rand(99, 99999);

        $data = [
            'product' => $this->request->getPost('product'),
            'specification' => $this->request->getPost('specification'),
            'category' => $this->request->getPost('category'),

            'subcategory' => $this->request->getPost('subcategory'),
            'brand' => $this->request->getPost('brand'),
            'age' => $this->request->getPost('age'),

            'mrp' => $this->request->getPost('mrp'),
            'offer' => $this->request->getPost('offer'),
            'disscount' =>$listPrice ,

            'quentity' => $this->request->getPost('quentity'),
            'avibility' => $this->request->getPost('avibility'),
            'shortinfo' => $this->request->getPost('shortinfo'),
            

            'pic1' => $fileName,
            'pic2' => $fileNametwo,
            'pic3' => $fileNamethree,
            'pic4' => $fileNamefoure,
        ];
        $productUpdate->update($ID, $data);
        return redirect()->to(base_url('ViewProduct'))->with('satus', 'Product Update Done');
    }


    // Remove Product

    public function removeProduct($ID)
    {
        $productRemove = new ProductModel();
        $productRemove->delete($ID);
        return redirect()->to(base_url('ViewProduct'))->with('satus', 'Category Remove Done');
    }


    // View Product

    public function viewProduct($ID)
    {
        $productView = new ProductModel();
        $data['product'] = $productView->find($ID);

        echo view('displayProduct', $data);
    }
}
