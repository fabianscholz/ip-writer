<?php

require_once '../logger/log.php';

$log = new \log('ip-writer');

$remote_ip = $_SERVER['REMOTE_ADDR'];

echo json_encode(array('ip'=>$_SERVER['REMOTE_ADDR']));

$log->logWrite($remote_ip);