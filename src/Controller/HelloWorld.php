<?php declare(strict_types=1);

namespace Lordrhodos\Slim4\Controller;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HelloWorld
{
    public function __invoke(Request $request, Response $response, array $arguments): Response
    {
        $name = $arguments['name'] ?? 'World';
        $content = "Hello $name!";
        $response->getBody()->write($content);

        return $response;
    }
}
