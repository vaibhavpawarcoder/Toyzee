<?php

namespace App\Controllers;

use App\Models\User;

use App\Models\Adminmodel;
use App\Models\Agemodel;
use App\Models\ProductModel;
use App\Models\SubCate;
use App\Models\Brandmodel;


class UserAccount extends BaseController
{
    public function __construct()
    {
        helper('form');
        helper('model');
    }
    public function index(){

        $user= new User();
        $data = [];
        $data['validation'] = null;
        $rules = [
            'name' => 'required',

            'pincode' => [
                'label'  => 'Rules.username',
                'rules'  => 'required',
                'errors' => [
                    'required' => 'Rules.Must Enter username  required',
                ]
            ],

            'email' => [
                'label'  => 'Rules.email',
                'rules'  => 'required|is_unique[user.email]',
                'errors' => [
                    'required' => 'Rules.Must Enter email  required',
                    'is_unique' => 'Rules.email Alerdy Exit ',
                ]
            ],

            'mobile' => [
                'label'  => 'Rules.mobile',
                'rules'  => 'required|is_unique[user.mobile]|max_length[10]',
                'errors' => [
                    'required' => 'Rules.Must Enter mobile  required',
                    'is_unique' => 'Rules.mobile Alerdy Exit ',
                    'max_length' => 'Mobile Number contain 10 digit',
                ]

            ],

            'password' => [
                'label'  => 'Password',
                'rules'  => 'required|min_length[4]|max_length[15]',
                'errors' => [
                    'min_length' => 'Your {field} is too short. You want to get hacked?',
                    'max_length' => 'Your Password to long'
                ],
            ],


            'profile' => 'uploaded[profile]|max_size[profile,1024]|ext_in[profile,png,jpg,gif,jpeg]',

        ];

        if ($this->validate($rules)) {

            // profile picture
            $file = $this->request->getFile('profile');
            if ($file->isValid() && !$file->hasMoved()) {
                $fileName = $file->getRandomName();
                $file->move('prfileUser', $fileName);
            };

            //genrate Admin_id

            $specification=$this->request->getPost('name').rand(99, 99999);

            $codesubstr= substr($specification,0,4);
            $add="$codesubstr".rand(99, 99999);

            $userdata = [
                
                'name' => $this->request->getVar('name'),
                'pincode' => $this->request->getVar('pincode'),
                'email' => $this->request->getVar('email'),
                'Mobile' => $this->request->getVar('mobile'),
                'pass' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'Uid'=> $add,
                'profile' => $fileName,
            ];
            $user->save($userdata);

        }
        else{
            $data['validation'] = $this->validator;
        }



        $subcategory= new SubCate();
        $data['subCate']= $subcategory->findAll();

        $brand= new Brandmodel();
        $data['brand']= $brand->findAll();

        $age = new Agemodel();
        $data['age'] = $age->findAll();



        return view('UserAccount', $data);
    }
}

?>