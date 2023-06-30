<?php

namespace App\Controllers;
use App\Models\Agemodel;

class AgeGroup extends BaseController
{
    public function __construct()
    {
        helper('form');
    }
    public function index()
    {
        $data = [];
        $data['validation'] = null;

        $rules = [
            // 'ageFrom' => 'required|is_unique[age.ageFrom]',

            'ageFrom' => [
                'label'  => 'Rules.AgeFrom',
                'rules'  => 'required|is_unique[age.ageFrom]',
                'errors' => [
                    'required' => 'Rules.Must Select Age i`ts  required',
                    'is_unique' => 'Rules. Do Not Repeat Same Value',
                ],
            ],
        ];
        if ($this->request->getMethod() == 'post') {
            if ($this->validate($rules)) {
                echo 'save category';
                $Agemodel = new Agemodel();
                $save = [
                    'ageFrom' =>  $this->request->getPost('ageFrom'),
                ];
                $Agemodel->save($save);
            }
            else {
                $data['validation'] = $this->validator;
            }
        }
        $ageData= new Agemodel();
         $data['ageInfo']=$ageData->findAll();

        // return $parser-> setData($data) -> render('viewFilter');
        echo view('ageGroup', $data);
    }


    // Update Age

    public function editAgeGroup($ID){

        $ageView= new Agemodel();
        $data['age']=$ageView->find($ID);

        echo view('User/updateAge', $data);

    }

    public function UpAgeGroup($ID){
        $ageView= new Agemodel();
        $data=[
            'ageFrom'=> $this->request->getPost('age'),
        ];
        $ageView->update($ID, $data);
        return redirect()->to(base_url('AgeGroup'))->with('satus', 'Category Update Done');
    }



    // Remove Age Group (Deleted)

    public function removeAge($ID){
        $ageRemove= new Agemodel();
        $ageRemove->delete($ID);
        return redirect()->to(base_url('AgeGroup'))->with('satus', 'Category Remove Done');

    }
}
