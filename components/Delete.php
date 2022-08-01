<?php

class Delete{

    public static function delete($productId){
       // unset($_SESSION['products'][$productId]);
       $i = 1;
       if(($_SESSION['products'][$productId]) > 1 ) {
           $_SESSION['products'][$productId] -= $i;
       } else {

        unset($_SESSION['products'][$productId]);

       }
    }
    
}

?>