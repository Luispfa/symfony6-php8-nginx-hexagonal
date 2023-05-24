<?php

declare(strict_types=1);

namespace App\UI\Controller\Book;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class LibraryController extends AbstractController
{
    /**
     * @Route("/library/list", name="library_list")
     */
    public function list(): JsonResponse
    {
        $response = new JsonResponse();
        $response->setData([
            'success' => true,
            'data' => [
                [
                    'id' => 1,
                    'title' => 'Hacia rutas salvajes'
                ],
                [
                    'id' => 2,
                    'title' => 'El nombre del viento'
                ]
            ]
        ]);

        return $response;
    }
}
