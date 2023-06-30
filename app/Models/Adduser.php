<?php 

namespace App\Models;
use CodeIgniter\Model;
$db = \Config\Database::connect();

class Adduser extends Model
{
    protected $db;
    public function __construct()
    {
        $this->db=db_connect();
    }

    public function get(){
        $builder= $this->table('product');
        $query= $builder->get();
        return $query;
    }
    

    public function insertData($data){
     $builder=  $this->db->table('user');
     
     $res=$builder->insert($data);

    if($this->db->affectedRows()==1){
        return true;
     }else{
        return false;
     }
    }
}


?>