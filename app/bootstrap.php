<?php
    require_once __DIR__ . '/../vendor/autoload.php';
    
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load();

    session_start();

    require_once 'config/main.php';

    require_once 'core/model.php';
    require_once 'core/view.php';
    require_once 'core/controller.php';
    require_once 'core/route.php';
    require_once 'core/db.php';
    
    Route::start();
?>