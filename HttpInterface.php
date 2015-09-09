<?php

namespace Liuggio\Http;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

interface HttpInterface
{
    /**
     * @param ServerRequestInterface $request
     * @param ResponseInterface      $response
     */
    public function handle(ServerRequestInterface $request, ResponseInterface $response);
}