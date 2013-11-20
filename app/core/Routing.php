<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jura
 * Date: 27.09.13
 * Time: 16:42
 * To change this template use File | Settings | File Templates.
 */

namespace Core;

class Routing
{
    private function runAction($controller, $request, $view)
    {
        $controller->setParameters($request, $view);

        $uri = $request->getUri();
        unset($uri[0]);

        $method = '';
        foreach($uri as $u)
            $method .= $u.'_';
        $method = trim($method, '_');
        $method = $method.'_'.$request->getMethod();

        //print_r($method);

        if (method_exists($controller, $method)) {
            $controller->{$method}();

            return true;
        } elseif (method_exists($controller, 'index_'.$request->getMethod()) && !isset($uri[1])) {
            $controller->{$method}();

            return true;
        } else

            return false;
    }

    public function handleRequest()
    {
        $request = new Request();
        $view = new View();
        $uri = $request->getUri();

        //var_dump($request);

        $isFind = false;
        if(!isset($uri[0])) $uri[0] = 'Index';
        foreach (Config::$bundels as $b) {
            $class = '\\'.$b.'\\Controller\\'.ucfirst($uri[0]);
            if(class_exists($class) == false) { $isFind = false; continue;};
            $controller = new $class;

            if ($this->runAction($controller, $request, $view)) {
                $isFind = true;
                break;
            }
        }

        if(!$isFind)
            echo '<h1>404</h1>';
    }
}
