<?php
require "./test.php";

$http = new Swoole\Http\Server('0.0.0.0', 9501);

$http->on('request', function ($request, $response) {
    if ($request->server['path_info'] == '/favicon.ico' || $request->server['request_uri'] == '/favicon.ico') {
        $response->end();
        return;
    }
    list($controller, $action) = explode('/', trim($request->server['request_uri'], '/'));
    //根据 $controller, $action 映射到不同的控制器类和方法
    (new \swoole\test())->index($request,$response);

});


$http->start();
