<?php

namespace App\Models;

use CodeIgniter\Model;

class AdminLogmodel extends Model{

    public function verifyEmail($email){
        $db=\Config\Database::connect();
        $builder=$this->db->table['admin'];

        $builder->select("admin_id, name, admin_user, email, mobile, password, profile");

        $builder ->where('email', $email);

        $result=$builder->get();
        if(count($result->getResultArray())==1){
            return $result->getRowArray();
        }else{
            return false;
        }
    }
}

?>