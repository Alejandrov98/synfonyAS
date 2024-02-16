<?php


namespace ProductosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $entityManager = $this->getDoctrine()->getManager();
        $productosRepository = $entityManager->getRepository('AppBundle:Product');
        $productos = $productosRepository->findAll();

        return $this->render('@ProductosBundle/Default/index.html.twig', [
            'productos' => $productos,
        ]);
    }
}

