<?php

require 'Loader.php';

Loader::autoLoad();

$query = $_SERVER['QUERY_STRING'];

Router::prefix('v1');

Router::add('questions',['controller'=>'Questions','action'=>'index']);

Router::check($query);
