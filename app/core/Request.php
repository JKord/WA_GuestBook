<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jura
 * Date: 27.09.13
 * Time: 16:51
 * To change this template use File | Settings | File Templates.
 */

namespace Core;

class Request
{
    private $method,
            $url,
            $uri;

    public function getMethod()
    {
        return $this->method;
    }

    public function getUri()
    {
        return $this->uri;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function __construct()
    {
        $this->init();
    }

    private function init()
    {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->url = $_SERVER['REQUEST_URI'];
        $this->uri = $this->cleaningUri($_SERVER['REQUEST_URI']);
    }

    private function cleaningUri($uri)
    {
        $param_pos = strpos($uri, '?');
        if($param_pos)
            $uri = substr($uri, 0, $param_pos - 1);
        $uri = explode('/',  trim($uri, '/'));

        foreach($uri as $k => $u)
            if(strpos($u, '.php') ||  $u == 'GuestBook') //later dell 'GuestBook'
                unset($uri[$k]);
        $uri = array_values($uri);

        return $uri;
    }
}
