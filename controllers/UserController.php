<?php 

class UserController{

    public function actionRegister(){

        $name = '';
        $email = '';
        $password = '';
        $result = false;


        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
        }

        $errors = array();

        if(!USER::checkName($name)){
            $errors[] = 'Name dont must be shorter that 2 symbols';
        }

        if(!USER::checkEmail($email)){
            $errors[] = 'Wrong email';
        }

        if(!USER::checkPassword($password)){
            $errors[] = 'Password dont must be shorter that 6 symbols';
        }

        if(USER::checkEmailExists($email)) {
            $errors[] = 'This email already used';
        }

        if(empty($errors)){

            $result = User::register($name, $email, $password);

        }



        require_once(ROOT.'/views/user/register.php');

        return true;
    }

    public function actionLogin(){

        $email = '';
        $password = '';
        $errors = array();


        if (isset($_POST['submit'])){

            $email = $_POST['email'];
            $password = $_POST['password'];

            if(!User::checkEmail($email)){

                $errors[] = 'Wrong email';
            }

            if(!User::checkPassword($password)){

                $errors[] = ' Password must not be shorter than 6 symbols ';
            }

            $userId = User::checkUserData($email, $password);

            if($userId == false){
                $errors[] = 'Wrong data to login' ;
            } else {
                User::auth($userId);
                header("Location: /cabinet/");
            }
        }
        
        require_once(ROOT.'/views/user/login.php');
        return true;
    }

    public function actionLogout(){

        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
        }
        header("Location: /");

    }

}
