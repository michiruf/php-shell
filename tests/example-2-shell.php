#!/usr/bin/env php
<?php

require 'src/shell.php';

composerRequire([
    'rivsen/hello-world'
]);

$hello = new Rivsen\Demo\Hello();
echo $hello->hello();
