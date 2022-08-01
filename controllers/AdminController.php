<?php

class AdminController extends AdminBase{

    public function actionIndex(){

        self::checkAdmin();
        
        $userId = User::checkLogged(); //return user id 

        $user = User::getUserById($userId);


        require_once(ROOT.'/views/admin/index.php');
        return true;
    }
}

?>