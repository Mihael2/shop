<?php


class AdminCategoryController extends AdminBase{
    public function actionIndex(){
        self::checkAdmin();

        $categoryListAdmin = Category::getCategoriesListAdmin();

        require_once(ROOT . '/views/admin_category/index.php');
        return true;

    }

    public function actionDelete($id){

        self::checkAdmin();

        if(isset($_POST['submit'])){

            Category::deleteCategoryById($id);
            header("Location: /admin/category");
        }

        require_once(ROOT . '/views/admin_category/delete.php');
        return true;

    }

    public function actionCreate(){

        self::checkAdmin();

        $categoriesList = Category::getCategoriesListAdmin();
        $lastCategorySortOrder = Category::getLastCategorySortOrder();
        

        if(!empty($_POST)){

            $options = array();

            $options['name'] = $_POST['name'];
            $options['sort_order'] = $_POST['sort_order'];
            $options['status'] = $_POST['status'];

            $errors = array();

            if(!isset($options['name']) || empty($options['name'])){
                $errors[] = 'Fill all fields';
            }

            if(empty($errors)){   

                $id = Category::createCategory($options);    
            }

            header("Location: /admin/category");


        }
        
        require_once(ROOT . '/views/admin_category/create.php');
        return true;
    }

    public function actionUpdate($id){

        self::checkAdmin();

        $categoryList = Category::getCategoriesListAdmin();

        $options = array();

        if(!empty($_POST['submit'])){
            $options['name'] = $_POST['name'];
            $options['sort_order'] = $_POST['sort_order'];
            $options['status'] = $_POST['status'];

            if(Category::updateCategoryById($id, $options)){

                header("Location: /admin/category");

            }

            
        }


        require_once (ROOT. '/views/admin_category/update.php');
        return true;
    }
}
