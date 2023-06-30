<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\Categorymodel;

class Product_Category extends BaseController
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
            // 'Category' => 'required|is_unique[category.Category]'
            'Category' => [
                'label'  => 'Rules.Category',
                'rules'  => 'required|is_unique[category.Category]',
                'errors' => [
                    'required' => 'Rules.Must Enter Category  required',
                    'is_unique' => 'Rules.Category Do Not Repeat Same Value',
                ],
            ],
        ];
        
        if ($this->request->getMethod() == 'post') {
            if ($this->validate($rules)) {
                echo 'save category';
                $Categorymodel = new Categorymodel();

                $save = [
                    'Category' => $this->request->getPost('Category')
                ];
                $Categorymodel->save($save);
            }
            else {
                $data['validation'] = $this->validator;
            }
        }

         $userdata= new Categorymodel();
         $data['userInfo']=$userdata->findAll();
        return view('Category', $data);
    }


    //Update Data 

    //Feach Data 
    public function updateCategory($ID){

        
        $Categorymodel= new Categorymodel();
        $data['Category']=$Categorymodel->find($ID);

        echo view('User/updateCategory', $data);
    }


    //Feach Data and Update
    public function Categoryup($ID){
        $Categorymodel= new Categorymodel();
        $data=[
            'Category'=> $this->request->getPost('Category'),
        ];
        $Categorymodel->update($ID, $data);
        return redirect()->to(base_url('Product_Category'))->with('satus', 'Category Update Done');

    }


    //deleted Category

    public function removeCatUp($ID){
        
        $Categorymodel= new Categorymodel();
        $Categorymodel->delete($ID);
        return redirect()->to(base_url('Product_Category'))->with('satus', 'Category Remove Done');
    }

}
