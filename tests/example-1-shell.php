#!/usr/bin/env php
<?php

require 'src/shell.php';

composerRequire([
    'illuminate/filesystem',
]);

use Illuminate\Filesystem\Filesystem;

echo (new Filesystem())->exists('.');
