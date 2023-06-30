<?php namespace App\Models;

use CodeIgniter\Model;


class Adminmodel  extends Model
{
    
    protected $table  = 'admin';
    protected $primaryKey = 'ID';

    protected $allowedFields =  [ 'admin_id', 'name', 'admin_user', 'email', 'mobile', 'password', 'profile'];


    public function verifyEmail($email){
        $builder= $this->db->table('admin');
        $builder->select("admin_id, name, admin_user, email, mobile, password, profile");

        $builder->where('email', $email);

        $result= $builder->get();

        if(count($result->getResultArray())==1){
            return $result->getRowArray();
        }
        else{
            return false;
        }

    }


    public function getLoggedInUserData($id){
        $builder= $this->db->table('admin');
        // $builder->select("admin_id, name, admin_user, email, mobile, password, profile");

        $builder->where('admin_id', $id);

        $result= $builder->get();


        if(count($result->getResultArray())==1){
            return $result->getRowArray();
        }
        else{
            return false;
        }

    }
}


?>