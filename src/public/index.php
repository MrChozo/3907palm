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


// Set up/Include view vars
$site_title = '3907 Palm Boulevard';
if ($env === 'dev') {
  $site_title = 'DEV - ' . $site_title;
}

require 'views/long_picture_tags_as_vars.php';


// Render view
require 'views/home.php';
