<?php

it('can execute a shell and refresh the cache', function () {
    expect(`php tests/example-1-shell.php --clear-php-shell-cache`)
        ->toBe('1');
});

it('can execute a shell and not refresh cache', function () {
    expect(`php tests/example-2-shell.php`)
        ->toBe('Hello World!');
})->repeat(2);

it('can execute a shell with remote require', function () {
    ini_set('allow_url_include', 'On');
    expect()
        ->and(ini_get('allow_url_include'))
        ->toBe('On')
        ->and(`php tests/example-3-shell.php`)
        ->toBe('Hello World!');
});

it('can execute a shell with eval', function () {
    expect(`php tests/example-4-shell.php`)
        ->toBe('Hello World!');
});
