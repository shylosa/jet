<?php

namespace jet\base;

class View
{
    public $route;
    public $controller;
    public $model;
    public $view;
    public $layout;
    public $data = [];

    public function __construct($route, $layout = '', $view = '')
    {
        $this->route = $route;
        $this->controller = $route['controller'];
        $this->view = $view;
        $this->model = $route['controller'];

        if ($layout === false) {
            $this->layout = false;
        } else {
            $this->layout = $layout ?: LAYOUT;
        }
    }

    public function render($data)
    {
        if (is_array($data)) extract($data);

        $viewFile = APP . "/views/{$this->controller}/{$this->view}.php";

        if (is_file($viewFile)) {
            ob_start();
            require_once $viewFile;
            $content = ob_get_clean();
        } else {
            throw new \Exception("На найден вид {$viewFile}", 500);
        }

        if (false !== $this->layout) {
            $layoutFile = APP . "/views/layouts/{$this->layout}.php";

            if (is_file($layoutFile)) {
                require_once $layoutFile;
            } else {
                throw new \Exception("На найден шаблон {$this->layout}", 500);
            }
        }
    }
}
