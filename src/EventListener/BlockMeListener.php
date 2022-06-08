<?php

namespace App\EventListener;

use Symfony\Component\HttpFoundation\Cookie;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class BlockMeListener
{
    const BLOCK_ME_NEEDLE = 'block-me';
    const BLOCK_DURATION_SECONDS = 30 * 60;

    public function onKernelRequest(RequestEvent $requestEvent)
    {
        $requestUrl = $requestEvent->getRequest()->getPathInfo();

        if ($requestUrl === '/something-is-wrong') {
            return;
        }

        $restrictAccessUntil = $requestEvent->getRequest()->cookies->get('restrictAccessUntil', null);

        if (str_contains($requestUrl, self::BLOCK_ME_NEEDLE)) {
            $restrictAccessUntil = time() + self::BLOCK_DURATION_SECONDS;
        }

        if (null !== $restrictAccessUntil && time() < $restrictAccessUntil) {
            $response = new RedirectResponse('/something-is-wrong');
            $response->headers->setCookie(Cookie::create('restrictAccessUntil', $restrictAccessUntil));
            $requestEvent->setResponse($response, 302);
        }
    }
}
