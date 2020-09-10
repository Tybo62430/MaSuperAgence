<?php

namespace App\Controller;

use App\Entity\Property;
use App\Form\PropertyType;
use App\Repository\PropertyRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/property")
 */
class PropertyController extends AbstractController {

    /**
     * @Route("/", name="property_index", methods={"GET"})
     */
    public function index(PropertyRepository $propertyRepository): Response {
        return $this->render('property/index.html.twig', [
                    'properties' => $propertyRepository->findAllVisible(),
                    'current_menu' => 'properties'
        ]);
    }

    /**
     * @Route("/new", name="property_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response {
        $property = new Property();
        $form = $this->createForm(PropertyType::class, $property);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($property);
            $entityManager->flush();

            return $this->redirectToRoute('property_index');
        }

        return $this->render('property/new.html.twig', [
                    'property' => $property,
                    'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{slug}-{id}", name="property_show", methods={"GET"}, requirements={"slug": "[a-z0-9\-]*"})
     */
    public function show(Property $property, string $slug): Response {
        if ($property->getSlug() !== $slug) {
            return $this->redirectToRoute('property_show', [
                'id' => $property->getId(),
                'slug' => $property->getSlug()
            ],301);
        }

        return $this->render('property/show.html.twig', [
                    'property' => $property,
                    'current_menu' => 'properties'
        ]);
    }

    /**
     * @Route("/{id}/edit", name="property_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Property $property): Response {
        $form = $this->createForm(PropertyType::class, $property);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('property_index');
        }

        return $this->render('property/edit.html.twig', [
                    'property' => $property,
                    'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="property_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Property $property): Response {
        if ($this->isCsrfTokenValid('delete' . $property->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($property);
            $entityManager->flush();
        }

        return $this->redirectToRoute('property_index');
    }

}
