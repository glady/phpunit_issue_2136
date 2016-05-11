<?php
require_once __DIR__ . '/vendor/autoload.php';
// autoloading needed.
spl_autoload_register(function($className) {
    require_once __DIR__ . '/' . $className . '.php';
});
