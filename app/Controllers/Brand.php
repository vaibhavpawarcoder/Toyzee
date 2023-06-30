<?php
namespace App\Controllers;

use App\Models\Brandmodel;

class Brand extends BaseController{

    public function __construct()
    {
        helper('form');
        helper('model');
    }

    //View Brand && Insert Data In Brand
    public function index(){

        $data = [];
        $data['validation'] = null;
        // rules
        $rules = [
            // 'Brand' => 'required|is_unique[brand.Brand]'

            'Brand' => [
                'label'  => 'Rules.Category',
                'rules'  => 'required|is_unique[brand.Brand]',
                'errors' => [
                    'required' => 'Rules.Must Enter Brand  required',
                    'is_unique' => 'Rules.Brand Do Not Repeat Same Value',
                ],
            ],
        ];

        if ($this->request->getMethod() == 'post') {
            if ($this->validate($rules)) {

                echo "Save data";
                $Brandmodel = new Brandmodel();
                $save = [
                    'Brand' => $this->request->getPost('Brand'),
                ];

                $Brandmodel->save($save);
            } else {
                $data['validation'] = $this->validator;
            }
        }

        $brandModel= new Brandmodel();
        $data['Brand']=$brandModel->findAll();
        return view('brand',$data);
    }

    // view Eidt Data in Brand
    public function editBrand($ID){
        $brandModel= new Brandmodel();
        $data['brand']=$brandModel->find($ID);
        echo view('User/brandUpdate', $data);
    }



    // Update Data in Brand
    public function updateBrand($ID){
        $brandModel= new Brandmodel();
        // $brandModel->find($ID);
        $data=[
            'Brand'=> $this->request->getPost('Brand'),
        ];
        $brandModel->update($ID, $data);
        return redirect()->to(base_url('Brand'))->with('status', 'Brand Update Successfully');

    }

    //Deleted Data In Brand
    public function removeBrand($ID){
        $brandModel= new Brandmodel();
        $brandModel->delete($ID);
        return redirect()->to(base_url('Brand'))->with('status', 'Brand Deleted Successfully');
    }

}






?>