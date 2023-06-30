<?php

namespace App\Controllers;

class Logout extends BaseController
{
    public function index()
    {
        session()->remove('user_login');

        session()->destroy();

        return redirect()->to(base_url());
    }


    
}
