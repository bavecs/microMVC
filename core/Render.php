<?php

namespace app\core;



class Render {
    private static $viewsFolder = __DIR__."/../views/";
    private static $layout = "main";

    public static function view($view)
    {
        $view = explode("@",
            strpos($view, "@") ? $view : "$view@DEFAULT"
        );

        $viewContent = self::viewContent($view[0]);
        $layoutContent = self::layoutContent($view[1]);

        echo str_replace("{{content}}", $viewContent, $layoutContent);
    }

    protected static function layoutContent($layout)
    {
        $layout = ($layout === "DEFAULT") ? self::$layout : $layout;
        ob_start();
        include_once(self::$viewsFolder . "/layout/$layout.php");
        return ob_get_clean();
    }

    protected static function viewContent($view)
    {
        ob_start();
        include_once(self::$viewsFolder . "/$view.php");
        return ob_get_clean();
    }
}