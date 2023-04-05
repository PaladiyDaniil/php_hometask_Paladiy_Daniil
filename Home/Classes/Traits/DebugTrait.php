<?php

namespace Phpcourse\Myproject\Classes\Traits;

trait DebugTrait
{
    public static function debugDump($data): void
    {
        global $debug;
        if($debug === true){
            var_dump($data);
        }
    }

    public static function debugConsole($data): void
    {
        global $debug;
        if($debug === true){
            $data = json_encode($data);
            echo "<script> console.log($data) </script>";
        }
    }
}
