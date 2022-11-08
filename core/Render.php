<?php

namespace app\core;



class Render {
    private static $viewsFolder =  "/views/";
    private static $layout = "main";

    public static function view($view, $params = [])
    {
        /*
            Tömbbre osztás a @ karakter mentén.
            Ha nem tartalmaz @-ot, default layout template-et kap.
        */
        $view = explode("@",
            strpos($view, "@") ? $view : "$view@".self::$layout
        );



        $viewContent = self::viewContent($view[0], $params);
        $layoutContent = self::layoutContent($view[1]);

        echo str_replace("{{content}}", $viewContent, $layoutContent);

    }

    protected static function layoutContent($layout)
    {
        $layout = ($layout === "DEFAULT") ? self::$layout : $layout;
        ob_start();
        include_once(Application::$ROOT_DIR . "/" . self::$viewsFolder . "/layout/$layout.php");
        return ob_get_clean();
    }

    protected static function viewContent($view, $params)
    {
                
        /*
            Paraméterek kibontása a view-nak
        */
        extract($params);

        
        ob_start();

        include_once(Application::$ROOT_DIR . "/" . self::$viewsFolder . "/$view.php");
        return ob_get_clean();
    }
}