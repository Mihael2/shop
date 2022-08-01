<?php

class Cart{
    public static function addProduct($id){
        
        $id = intval($id);

        $productsInCart = array();

        if(isset($_SESSION['products'])){
            $productsInCart = $_SESSION['products'];
        }

        if(array_key_exists($id, $productsInCart)){
            $productsInCart[$id] ++;
        } else {
            $productsInCart[$id] = 1;
        }

        $_SESSION['products'] = $productsInCart;

        return self::countItems();
    }

    public static function countItems(){
        if(isset($_SESSION['products'])){
            $count = 0;

            foreach($_SESSION['products'] as $id => $quantity){
                $count = $count + $quantity;
            }
            return $count;
        } else {
            return $count = 0;
        }
    }

    public static function getProducts(){
        if(isset($_SESSION['products'])){
            return $_SESSION['products'];
        }else{

            return false;

        }
          
    }

    public static function getTotalPrice($products){  //products - array with arrays with id ,cod and price
        $productsInCart = self::getProducts();         //productsInCart - array with products in cart id and quantity

        $total = 0;

        /*echo ' $products: <br>';
        print_r($products);
        echo ' $productsInCart: <br>';
        print_r($productsInCart);*/

        if($productsInCart){
            foreach ($products as $item) {
                 $total += $item['price'] * $productsInCart[$item['id']]; // 25*5 for 0;
            }
        }

        return $total; 
    }

    public static function getTotalProducts(){
        $productsInCart = array();
        $productsInCart = self::getProducts();
        if(!empty($productsInCart)){
           $totalProducts = array_sum($productsInCart);
            return $totalProducts;
        } return true;
        
    }

    public static function clear(){
        if(isset($_SESSION['products'])){

            unset($_SESSION['products']);

        }
    }
}

?>