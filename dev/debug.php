<?php

if (! function_exists('dd')) {
    function dd($var): never
    {
        $trace = debug_backtrace();

        $file = $trace[0]['file']; // The original "file" where the `dd` call was made...
        $line = $trace[0]['line']; // The original "line" where the `dd` call was made...

        echo "// $file:$line\n"; // print the source file:line...

        var_dump($var);
        exit();
    }
}
