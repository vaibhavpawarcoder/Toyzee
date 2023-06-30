<?php

namespace App\Filters;

use \CodeIgniter\Filters\FilterInterface;
use \CodeIgniter\Filters\HTTP\RequestInterface;
use \CodeIgniter\Filters\HTTP\ResponseInterface;
use CodeIgniter\HTTP\RequestInterface as HTTPRequestInterface;
use CodeIgniter\HTTP\ResponseInterface as HTTPResponseInterface;

class LoginFilter implements FilterInterface {

    public function before(HTTPRequestInterface $request, $arguments = null)
    {
         if(!session()->has('user_login')){
            return redirect()->to(base_url().'AdminLogin');
        }
    }
    public function after(HTTPRequestInterface $request, HTTPResponseInterface $response, $arguments = null)
    {
        
    }
}

?>