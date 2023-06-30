<?php
namespace App\Models;
use CodeIgniter\Model;

class Agemodel extends Model{
    protected $table  = 'age';
    protected $primaryKey = 'ID';

    protected $allowedFields = ['ageFrom' ];
}

?>