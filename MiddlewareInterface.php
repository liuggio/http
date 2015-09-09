<?php

namespace Liuggio\Http;

interface MiddlewareInterface extends HttpInterface
{
    /**
     * @param HttpInterface $next
     */
    public function addNext(HttpInterface $next);
}