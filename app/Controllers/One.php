<?php

namespace App\Controllers;


class One extends BaseController
{
    public function __construct()
    {
        helper('form');
        helper('model');
    }
    public function index()
    {

        $data=[];
        $data['validation']=null;

        $rules=[
            'Category'=>'required',
            'Email'=>'required|valid_email',
            'Mobile'=>'required|numeric|exact_length[10]',
        ];

        if($this->request->getMethod() == 'post'){

            if($this->validate($rules)){
                echo "validation dobe";
    
            }else{
                $data['validation']=$this->validator;
            }
        }
        

        echo view('formnew', $data);
        
    }
    public function form(){




        $parser= \Config\Services::parser();
        $data=[
            'title' => 'vaibhav',
            'body' => 'this is body',
            'footer' => 'this is footer section',
            'date'=>'25-05-2023',
            'mobile'=>'7387545206'
        ];
        return $parser-> setData($data) -> render('viewFilter');

    }
}

?>