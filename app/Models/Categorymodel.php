<?php namespace App\Models;

use CodeIgniter\Model;


class Categorymodel  extends Model
{
    
    protected $table  = 'category';
    protected $primaryKey = 'ID';

    protected $allowedFields = ['Category'];
}


?>