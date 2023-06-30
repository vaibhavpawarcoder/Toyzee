<?php namespace App\Models;

use CodeIgniter\Model;


class Brandmodel  extends Model
{
    
    protected $table  = 'brand';
    protected $primaryKey = 'ID';

    protected $allowedFields = ['Brand'];
}


?>