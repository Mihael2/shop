<?php 

class AdminOrderController extends AdminBase{
    public function actionIndex(){

        self::checkAdmin();

        $orderList = Order::getOrderList();

        require_once(ROOT. '/views/admin_order/index.php');
        return true;
    }

    public function actionUpdate($id){
        self::checkAdmin();
        $orderById = Order::getOrderById($id);

        if(!empty($_POST['submit'])){

            $errors = array();
            $options = array();
            $options['user_name'] = $_POST['user_name'];
            $options['user_phone'] = $_POST['user_phone'];
            $options['user_comment'] = $_POST['user_comment'];
            $options['date'] = $_POST['date'];
            $options['status'] = $_POST['status'];

            if(empty($options['user_name'])){
                $errors[] = 'Wrong user name!!!';
            }

            if(empty($errors)){
                if(Order::updateOrderById($id, $options)){
                    header("Location: /admin/order");
                }
            }

        }

        require_once(ROOT. '/views/admin_order/update.php');
        return true;
    }

    public function actionDelete($id){
        self::checkAdmin();

        if(!empty($_POST['submit'])){
            Order::deleteOrderById($id);
            header("Location: /admin/order");
        }

        require_once(ROOT . '/views/admin_order/delete.php');
        return true;
    }

    public function actionView($id){

        self::checkAdmin();
        $order = Order::getOrderById($id);

        $productsQuantity = json_decode($order['products'], true);


        $productsIds = array_keys($productsQuantity);

        $products = Product::getProdustsByIds($productsIds);
    

        require_once(ROOT . '/views/admin_order/view.php');
        return true;

    }
}

?>