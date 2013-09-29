<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Jura
 * Date: 27.09.13
 * Time: 18:26
 * To change this template use File | Settings | File Templates.
 */

namespace Core;

class Controller
{
    protected $request,
              $view;

    public function setParameters($request, $view)
    {
        $this->request = $request;
        $this->view = $view;
    }

    public function getRequest()
    {
        return $this->request;
    }

    public function index_get() { }
    public function index_post() { }

    public function __call($name, $args)
    {
        $this->{'index_'.$this->request->getMethod()}();
    }
}
