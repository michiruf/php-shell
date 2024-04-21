#!/usr/bin/env php
<?php

require 'https://raw.githubusercontent.com/michiruf/php-shell/main/src/shell.php';

composerRequire([
    'rivsen/hello-world'
]);

$hello = new Rivsen\Demo\Hello();
echo $hello->hello();
