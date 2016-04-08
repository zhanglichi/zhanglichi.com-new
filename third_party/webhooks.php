<?php
date_default_timezone_set('Asia/Shanghai');

$data = [
    'TIME'  => date("Y-m-d H:i:s"), 
    'GET'   => $_GET,
    'POST'  => $_POST,
];

$log_path = '/var/log/third_party/zhanglichi_webhooks' . date("Y-m-d") . '.log';
$command = ' cd /home/web/website/zhanglichi.com/ && git pull origin master >> ' . $log_path;

file_put_contents($log_path, json_encode($data) . "\n", FILE_APPEND);
exec($command);

echo 'thanks!';
