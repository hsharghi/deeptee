<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MediaController {

    /**
     * @Route("/media")
     */
    public function uploadMedia()
    {
        return new JsonResponse([
           'test' => 'another test'
        ]);
    }
}
