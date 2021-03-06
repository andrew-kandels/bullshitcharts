<?php
return function ($class) {
    static $map;
    if (!$map) {
        $map = include __DIR__ . '/autoload_function.php';
    }

    if (!isset($map[$class])) {
        return false;
    }
    return include $map[$class];
};
