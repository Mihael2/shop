<?php

class AdminProductController extends AdminBase{
    public function actionIndex(){

        self::checkAdmin();

        $productsList = Product::getProductsList();

        require_once(ROOT.'/views/admin_product/index.php');
        return true;


    }

    public function actionDelete($id){
        self::checkAdmin();

        if(isset($_POST['submit'])){

            Product::deleteProductById($id);

            header("Location: /admin/product");
        }

        require_once(ROOT . '/views/admin_product/delete.php');
        return true;
    }

    public function actionCreate(){

        $categoriesList = array();
        $categoriesList = Category::getCategoriesListAdmin(); // return array with data from db table categories

        if(isset($_POST['submit'])){   // if form is sended

            $options = array();
            
            $options['name'] = $_POST['name'];
            $options['code'] = $_POST['code'];
            $options['price'] = $_POST['price'];
            $options['category_id'] = $_POST['category_id'];
            $options['brand'] = $_POST['brand'];
            $options['availability'] = $_POST['availability'];
            $options['description'] = $_POST['description'];
            $options['is_new'] = $_POST['is_new'];
            $options['is_recommended'] = $_POST['is_recommended'];
            $options['status'] = $_POST['status'];

            $errors = array();

            if(!isset($options['name']) || empty($options['name'])){
                $errors[] = 'Fill all fields';
            }

            if(empty($errors)){   // if no errors

                $id = Product::createProduct($options);     //create product
            }

            if($id){
                
                if(is_uploaded_file($_FILES['image']['tmp_name'])){
                    move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products/{$id}.jpg");
                }
            };

            header("Location: /admin/product");
        }


        require_once(ROOT . '/views/admin_product/create.php');
        return true;
    }

    public function actionUpdate($id){
        self::checkAdmin();
        $product = Product::getProductById($id);
        $categoriesList = Category::getCategoriesList();
        $options = array();

        if(!empty($_POST['submit'])){

            $options['name'] = $_POST['name'];
            $options['code'] = $_POST['code'];
            $options['price'] = $_POST['price'];
            $options['category_id'] = $_POST['category_id'];
            $options['brand'] = $_POST['brand'];
            $options['availability'] = $_POST['availability'];
            $options['description'] = $_POST['description'];
            $options['is_new'] = $_POST['is_new'];
            $options['is_recommended'] = $_POST['is_recommended'];
            $options['status'] = $_POST['status'];

            if(Product::updateProductById($id, $options)){
                if(is_uploaded_file($_FILES['image']['tmp_name'])){
                    move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . "/upload/images/products{$id}.jpg");
                }

            }

            
            header("Location: /admin/product");
            
        }

        require_once(ROOT . '/views/admin_product/update.php');
        return true;
    }
}
