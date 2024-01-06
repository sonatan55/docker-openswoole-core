<?php

$server = new swoole_http_server('0.0.0.0', 9501);

$server->on("Start", function($server)
{
    echo "OpenSwoole http server is started at http://127.0.0.1:9501\n";
});

$server->on("Request", function($request, $response)
{
    $response->header("Content-Type", "text/plain");
    $response->end("Hello World\n");
});

$server->start();