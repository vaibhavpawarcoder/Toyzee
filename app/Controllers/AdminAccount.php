<?php

namespace App\Controllers;

use App\Models\Adminmodel;

class AdminAccount extends BaseController
{

    public function __construct()
    {
        helper('form');
        helper('model');
    }

    //View Brand && Insert Data In Brand
    public function index()
    {

        $adminData= new Adminmodel();
        $data = [];
        $data['validation'] = null;

        $rules = [
            'name' => 'required',

            'username' => [
                'label'  => 'Rules.username',
                'rules'  => 'required|is_unique[admin.admin_user]',
                'errors' => [
                    'required' => 'Rules.Must Enter username  required',
                    'is_unique' => 'Rules.Username Alerdy Exit ',
                ]
            ],

            'email' => [
                'label'  => 'Rules.email',
                'rules'  => 'required|is_unique[admin.email]',
                'errors' => [
                    'required' => 'Rules.Must Enter email  required',
                    'is_unique' => 'Rules.email Alerdy Exit ',
                ]
            ],

            'mobile' => [
                'label'  => 'Rules.mobile',
                'rules'  => 'required|is_unique[admin.mobile]|max_length[10]',
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
                $file->move('prfileAdmin', $fileName);
            };

            //genrate Admin_id

            $adminid=str_shuffle('abcdefghijklmnopqrstuvwxyz123456789'.$this->request->getVar('username').$this->request->getVar('name'));


            $userdata = [
                'admin_id'=>$adminid,
                'name' => $this->request->getVar('name'),
                'admin_user' => $this->request->getVar('username'),
                'email' => $this->request->getVar('email'),
                'mobile' => $this->request->getVar('mobile'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'profile' => $fileName,
            ];
            $adminData->save($userdata);

        }
        else{
            $data['validation'] = $this->validator;
        }

        
        return view('adminAccount', $data);
    }
}
