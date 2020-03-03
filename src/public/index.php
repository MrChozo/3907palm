<?php
include 'real_env.php';

$env = 'prod';
if (isset($real_env) && $real_env === 'prod' || $real_env === 'dev') {
    $env = $real_env;
}

$site_title = '3907 Palm Boulevard';
if ($env === 'dev') {
    $site_title = 'DEV - ' . $site_title;
}

require 'html/home.php';
