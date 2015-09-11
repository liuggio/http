<?php

namespace Liuggio\Http;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface HttpHandlerInterface
{
    /**
     * @param RequestInterface  $request
     * @param ResponseInterface $response
     */
    public function handle(RequestInterface $request, ResponseInterface &$response);
}
