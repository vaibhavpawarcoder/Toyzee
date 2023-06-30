<?php namespace App\Models;

use CodeIgniter\Model;


class User extends Model
{
    
    protected $table  = 'user';
    protected $primaryKey = 'ID';

    protected $allowedFields = ['name', 'pincode', 'email', 'Mobile', 'pass', 'Uid', 'profile'];
}


?>