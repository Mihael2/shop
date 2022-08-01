<?php

class CabinetController{
    public function actionIndex(){

        $userId = User::checkLogged();

        $user = User::getUserById($userId);

        
        require_once(ROOT . '/views/cabinet/index.php');
        return true;
    }

    public function actionEdit(){

        $userId = User::checkLogged();
        $user = User::getUserById($userId);

        $name = $user['name'];
        $password = $user['password'];

        $result = false;

        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $password = $_POST['password'];

            $errors = array();

            if(!User::checkName($name)){

                $errors[] = 'Name must not be shorter than two symbols';
            }

            if(!User::checkPassword($password)){

                $errors[] = ' Password must not be shorter than 6 symbols ';
            }

            if(empty($errors)){
                $result = User::edit($userId, $name, $password);
            }
        }

        require_once(ROOT.'/views/cabinet/edit.php');

        return true;


    }
}

?>