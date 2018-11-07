<?php
require_once __DIR__ . '/vendor/autoload.php';

$data = file_get_contents('php://input');

_logs($data);

$line = new Pitchanon\GitlabNotify\GitlabNotify();
$line::Config(["token" => "xxxxx"]);

res($line::Notify($data));

/**
 * Logs.
 *
 * @param string $message Logs message.
 * @param string $destination Logs destination.
 */
function _logs(string $message, string $destination = "debug.log") {
  error_log(date("Y/m/d H:i:s ") . $message . "\n\n", 3, $destination);
}

function res($res) {
  header("Content-type:application/json");
  print_r($res);
}