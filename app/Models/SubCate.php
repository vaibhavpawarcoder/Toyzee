<?php namespace App\Models;

use CodeIgniter\Model;


class SubCate extends Model
{
    
    protected $table  = 'subCategory';
    protected $primaryKey = 'ID';

    protected $allowedFields = ['Category', 'subCategory'];
}


?>