<?php

namespace App\Controllers;

use App\Models\SubCate;
use App\Models\Categorymodel;

class SubCategory extends BaseController
{
    public function __construct()
    {
        helper('form');
        helper('model');
    }
    public function index()
    {
        $data = [];
        $data['validation'] = null;
        $rules = [
            'Category' => 'required',
            // 'subCategory' => 'required|is_unique[subcategory.subCategory]'

            'subCategory' => [
                'label'  => 'Rules.Category',
                'rules'  => 'required|is_unique[subcategory.subCategory]',
                'errors' => [
                    'required' => 'Rules.Must Enter Sub Category  required',
                    'is_unique' => 'Rules.Sub Category Do Not Repeat Same Value',
                ],
            ],
        ];

        if ($this->request->getMethod() == 'post') {
            if ($this->validate($rules)) {

                echo "Save data";
                $SubCate = new SubCate();
                $save = [
                    'Category' => $this->request->getPost('Category'),
                    'subCategory' => $this->request->getPost('subCategory'),
                ];

                $SubCate->save($save);
            } else {
                $data['validation'] = $this->validator;
            }
        }

        //feach data from database

        $Categorymodel = new Categorymodel();
        $data['Categorymodel'] = $Categorymodel->findAll();

        $SubCate = new SubCate();
        $data['subCategory'] = $SubCate->findAll();
        echo view('subCategory', $data);
    }
    //Feach Data and Update

    public function editSubCategory($ID)
    {

        $subCategory = new SubCate;
        $data['subCategory'] = $subCategory->find($ID);

        return view('User/updatesubCategory', $data);
    }


    public function SubCatUp($ID)
    {
        $SubCategorymodel = new SubCate();
        $data = [
            'subCategory' => $this->request->getPost('subCategory'),
        ];
        $SubCategorymodel->update($ID, $data);
        return redirect()->to(base_url('SubCategory'))->with('satus', 'Category Update Done');
    }


    //Deleted Sub Category

    public function removesubCatUp($ID)
    {
        $SubCategorymodel = new SubCate();
        $SubCategorymodel->delete($ID);
        return redirect()->to(base_url('SubCategory'))->with('satus', 'Category Remove Done');
    }
}
