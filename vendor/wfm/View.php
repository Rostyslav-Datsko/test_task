<?php

namespace wfm;

class View
{
    public string $content = '';

    public function __construct(
        public $route,
        public $layout = '',
        public $view = ''
    )
    {
        if (false !== $this->layout){
            $this->layout = $this->layout ?: LAYOUT;
        }
    }

    public function render($data)
    {
        if (is_array($data)){
            extract($data); //дані в масиві стануть з ключів на змінні з відповідними даними ключам
        }

        $view_file = APP . "/views/{$this->route['controller']}/{$this->view}.php";
        if (is_file($view_file)){
            ob_start();
            require_once $view_file;
            $this->content = ob_get_clean();
        }else{
            throw new \Exception("View:{$view_file} not found", 500);
        }

        if (false !== $this->layout){
            $layout_file = APP . "/views/layouts/{$this->layout}.php";
            if (is_file($layout_file)){
                require_once $layout_file;
            }else{
                throw new \Exception("Template {$layout_file} not found",500);
            }
        }

    }

    public function getPart($file, $data=null)
    {
        if (is_array($data)){
            extract($data);
        }

        $file = APP . "/views/{$file}.php";
        if (is_file($file)){
            require $file;
        }else{
            echo "File {$file} wasn`t found..";
        }
    }

}