<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 *
 */
class BaseController
{
    /**
     * @param Request $request
     * @return Response
     */
    public function indexAction(Request $request)
    {
        return new Response('demo', 200);
    }
}
