<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SomethingIsWrongController extends AbstractController
{
    /**
     * @Route("/something-is-wrong", name="app_something_is_wrong")
     */
    public function index(Request $request): Response
    {
        $requestAccessUntil = $request->cookies->get('restrictAccessUntil', 0);
        $remainingMinutes = ($requestAccessUntil - time()) / 60;

        return $this->render(
            'something_is_wrong/index.html.twig',
            [
                'restrictionExpiresIn' => number_format($remainingMinutes),
            ]
        );
    }
}
