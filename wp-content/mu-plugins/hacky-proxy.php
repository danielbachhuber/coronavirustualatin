<?php

// @TODO Read from ENV or app-config
$url = 'https://us-central1-coronavirustualatin.cloudfunctions.net/coronavirustualatin--pr-1';

//print_r();
// die();

require $_ENV['HOME'] . '/code/wp-content/mu-plugins/hacky-proxy/vendor/autoload.php';


$hackyproxy = new \Stevector\HackyProxy\PantheonToGCPBucket($url);
