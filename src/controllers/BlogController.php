<?php

namespace App\Controllers;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class BlogController{
    function index (Request $request, Response $response, $args) {
        $response->getBody()->write("Ultimos blogs publicados desde la clase");
        return $response;
    }

}