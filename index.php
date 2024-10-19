<?php

error_reporting(0);

// Load Composer's auto loader
require_once(__DIR__ .  '/vendor/autoload.php');

use Dotenv\Dotenv;

// Load the .env file
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

require_once(__DIR__ . '/routes.php');
