<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Http\Authorization\AccessDeniedHandlerInterface;


class AccessDeniedHandler implements AccessDeniedHandlerInterface
{
    public function handle(Request $request, AccessDeniedException $accessDeniedException): ?Response
    {
        $content = '<h1>You have no power here!!!<br>
        Please return to your own kingdom using the button</h1>
        <button><a href="/">Back to your own kingdom you go</a></button>';

        return new Response($content, 403);
    }
}
