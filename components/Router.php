<?php 

class Router{

    private $routes;

    public function __construct(){                 
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPath);
    }

    private function getUri(){                       
        if(!empty($_SERVER['REQUEST_URI'])){
            return trim($_SERVER['REQUEST_URI'],'/');
        }
    }

    public function run(){
        $uri = $this->getURI();  // get request uri

        foreach ($this->routes as $uriPattern=>$path){

            if(preg_match("~$uriPattern~", $uri)){

                /* echo '$uriPattern : ' . $uriPattern;
                 echo '<br>$path : ' . $path;
                 echo '<br>$uri : ' . $uri;*/

                 $internalRoute = preg_replace("~$uriPattern~",$path,$uri);

                // echo '<br>internalRoute : ' . $internalRoute;

                 $segments = explode('/', $internalRoute);
                 $controllerName = ucfirst(array_shift($segments)) . 'Controller';

                 $actionName = 'action' . ucfirst(array_shift($segments));

                 $controllerFilePath = ROOT . '/controllers/' . $controllerName . '.php';

                 $parameters = $segments;

                 if(file_exists($controllerFilePath)){
                    include_once($controllerFilePath);
                 }

                 $controllerObject = new $controllerName;
                 $result = call_user_func_array(array($controllerObject, $actionName),$parameters);

                 if ($result != null) {
                    break ;
                }



                 
            }

        }
    }
}

?>