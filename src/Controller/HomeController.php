<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\PropertyRepository;

class HomeController extends AbstractController {

    /**
     * @Route("/", name="home")
     * @param PropertyRepositoy $repository
     * @return Response
     */
    public function index(PropertyRepository $repository): Response {

        $properties = $repository->findLAtest();

        return $this->render('pages/home.html.twig', [
                    'properties' => $properties
        ]);
    }

}
