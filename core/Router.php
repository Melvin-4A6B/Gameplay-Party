<?php

class Router
{

    public function __construct()
    {
        $this->determineDestination($this->getUri());
    }

    private function getUri()
    {
        $url = $_SERVER["REQUEST_URI"];
        $uri = explode("/", $url);

        return $uri;
    }

    private function sendToDestination($className, $method, $params)
    {
        $class = 'app/controllers/' . $className . '.php';
        require_once($class);
        $obj = new $className;
        die(call_user_func_array(array($obj, $method), $params));
    }

    private function determineDestination($uri = "")
    {
        if (isset($uri[3]) && $uri[3] != "") {
            if (class_exists($uri[3])) {
                $className = $uri[3];
            } else {
                $className = DEFAULT_CONTROLLER;
            }
        } else {
            $className = DEFAULT_CONTROLLER;
        }
        if (isset($uri[4]) && $uri[4] != "") {
            if (method_exists($className, $uri[4])) {
                $method = $uri[4];
            } else {
                $method = DEFAULT_METHOD;
            }
        } else {
            $className = DEFAULT_CONTROLLER;
            $method = DEFAULT_METHOD;
        }
        $params = array_slice($uri, 5);
        $this->sendToDestination($className, $method, $params);
    }

}
