<?php

class CartController{

    public function actionDelete($id){
        $result = Delete::delete($id);
        //print_r($_SESSION['products']);
       // header("Location: /cart/");

    }

    public function actionPlus($id){
        $result = Plus::plus($id);
    }

    public function actionAdd($id){
        Cart::addProduct($id);

        $referrer = $_SERVER['HTTP_REFERER'];
        header("Location: $referrer");
    }

    public function actionAddAjax($id){

        echo Cart::addProduct($id);
        return true;
    }

    public function actionIndex(){

        $categories = array();
        $categories = Category::getCategoriesList();

        $productsInCart = false;
        $productsInCart = Cart::getProducts();

        if($productsInCart){
            $productsIds = array_keys($productsInCart);
            $products = Product::getProdustsByIds($productsIds);
            

           $totalPrice = Cart::getTotalPrice($products);

           $totalProducts = Cart::getTotalProducts();

            require_once(ROOT . '/views/cart/index.php');
        }
        else{
            header("Location: /catalog");
        }
        return true;
    }

    public function actionCheckout(){
        $result = false; 

        if(isset($_POST['submit'])) {

            $userName = $_POST['userName'];
            $userPhone = $_POST['userPhone'];
            $userComment = $_POST['userComment'];

            $errors = array();
            if(!User::checkName($userName)){
               $errors[] = 'Wrong name' ;
            }

            if(empty($errors)){   //if no errors

                $productsInCart = Cart::getProducts();

                if(User::isQuest()){
                     $userId = false;
                } else{
                    $userId = User::checkLogged();
                }

                $result = Order::save($userName, $userPhone, $userComment, $userId, $productsInCart);
                if($result){
                    Cart::clear();
                }
            } else {

                $productsIds = array_keys($productsInCart);
                $products = Product::getProductsByIds($productsIds);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuantity = Cart::countItems();

            }



        } else{


            $productsInCart = Cart::getProducts();
            if($productsInCart == false){
                header("Location: /");
            } else{
                $productsIds = array_keys($productsInCart);
                $products = Product::getProdustsByIds($productsIds);
                $totalPrice = Cart::getTotalPrice($products);
                $totalQuantity = Cart::countItems();

                $userName = false;
                
                if(User::isQuest()){

                } else{
                    $userId = User::checkLogged();
                    $user = User::getUserById($userId);

                    $userName = $user['name'];
                }
            }
        }

        require_once(ROOT . '/views/cart/checkout.php');
        return true;


    }

}

?>