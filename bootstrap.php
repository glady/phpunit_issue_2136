<?php
require_once __DIR__ . '/vendor/autoload.php';
// autoloading needed.
spl_autoload_register(function($className) {
    if (file_exists(__DIR__ . '/' . $className . '.php')) {
        require_once __DIR__ . '/' . $className . '.php';
        return true;
    }
    return false;
});
