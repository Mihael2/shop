<?php

class AdminController extends AdminBase{

    public function actionIndex(){

        self::checkAdmin();
        
        $userId = User::checkLogged(); //return user id if logged

        $user = User::getUserById($userId); //return user array


        require_once(ROOT.'/views/admin/index.php');
        return true;
    }
}
