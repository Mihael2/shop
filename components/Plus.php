<?php

class Plus{
    public static function plus($productId){

        $_SESSION['products'][$productId] += 1;

    }
}

?>