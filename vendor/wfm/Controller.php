<?php

namespace wfm;

abstract class Controller
{
    public array $data = [];
    public false|string $layout = '';
    public string $view = '';
    public object $model;


    public function __construct(public $route = [])
    {

    }

    public function getModel()
    {
        $model = 'app\models\\' . $this->route['controller'];
        if (class_exists($model)) {
            $this->model = new $model;
        }
    }

    public function getView()
    {
        $this->view = $this->view ?: $this->route['action'];
        (new View($this->route, $this->layout, $this->view))->render($this->data);
    }

    public function set($data)
    {
        $this->data = $data;
    }

    function redirect($http = false)
    {
        if ($http) {
            $redirect = $http;
        } else {
            $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
        }
        header("Location: $redirect");
        die;
    }

}