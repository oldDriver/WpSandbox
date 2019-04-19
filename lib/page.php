<?php
namespace Sandbox\Lib;

class Page
{
    public function render($template, $params)
    {
        extract($params);
        // render
        ob_start();
        ob_implicit_flush(0);
        try {
            require dirname(__DIR__).'/templates/'.$template;
        } catch (\Exception $e) {
            ob_end_clean();
            throw $e;
        }
        echo ob_get_clean();
    }
}
