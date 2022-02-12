<?php 

    spl_autoload_register("autoload");

    function autoload($className) {

        $path = 'classes/';
        $ext = '.class.php';
        $filename = $path . $className . $ext;

        if(!file_exists($filename)) {

            return false;

        }

        include_once $filename;
    }


    