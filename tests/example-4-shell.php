#!/usr/bin/env php
<?php

eval(preg_replace('/^.+\n/', '', file_get_contents('https://raw.githubusercontent.com/michiruf/php-shell/main/src/shell.php')));

composerRequire([
    'rivsen/hello-world',
]);

$hello = new Rivsen\Demo\Hello();
echo $hello->hello();
