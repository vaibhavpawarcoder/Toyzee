<?php
function display_error($validation, $feild){
    if(isset($validation)){
        if($validation->hasError($feild)){
            return $validation->getError($feild);
        }else{
            return false;
        }
    }
}

?>