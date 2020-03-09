<?php
include 'real_env.php';

// Set up environment
$env = 'prod';
if (defined('ENV') && ENV === 'prod' || ENV === 'dev') {
  $env = ENV;
}
$img = '/img/';
if (defined('IMG')) {
  $img = IMG;
}


// Set up view vars
$site_title = '3907 Palm Boulevard';
if ($env === 'dev') {
  $site_title = 'DEV - ' . $site_title;
}

require 'html/image_data.php';


// Render view
require 'html/home.php';
