<?php namespace App\Models;

use CodeIgniter\Model;


class ProductModel  extends Model
{
    
    protected $table  = 'product';
    protected $primaryKey = 'ID';

    protected $allowedFields =  [ 'product', 'specification', 'category', 'subcategory', 'brand', 'age', 'mrp', 'offer',  'disscount', 'quentity', 'avibility', 'shortinfo', 'delivery', 'pic1', 'pic2', 'pic3', 'pic4',  'ckeditor'];


    
}




?>