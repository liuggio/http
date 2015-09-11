<?php

namespace Liuggio\Http;

interface MiddlewareHandlerInterface extends HttpHandlerInterface
{
    /**
     * @param HttpHandlerInterface $next
     */
    public function addNext(HttpHandlerInterface $next);
}