<?php


namespace swoole;


class test
{
    public function index($request, $response){
        $response->header("Content-Type", "text/html; charset=utf-8");
        $response->end("<h1>Hello Swoole.Text.Index #".rand(1000, 9999)."</h1>");
    }
}