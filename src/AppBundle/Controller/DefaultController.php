<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Response; // como seran las respuestas 
use Symfony\Component\HttpFoundation\Request; // Lo utilizamos para el post para traer todo lo enviado por un POST

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        
        // Obtener el repositorio de categorías
        $categoryRepository = $em->getRepository("AppBundle:Category");
        // Obtener todas las categorías
        $categories = $categoryRepository->findAll();
        
        // Obtener el repositorio de productos
        $productRepository = $em->getRepository("AppBundle:Product");
        // Obtener todos los productos
        $products = $productRepository->findAll();
        
        // Renderizar la vista y pasar los productos y categorías a la plantilla
        return $this->render('AppBundle:Home:index.html.twig', [
            'products' => $products,
            'categories' => $categories,
        ]);
    

    }
    // // replace this example code with whatever you need
    // return $this->render('@AppBundle/Resources/views/Index.html.twig', [
    //     'base_dir' => realpath($this->getParameter('kernel.root_dir') . '/..') . DIRECTORY_SEPARATOR,
    // ]);
    
    /**
     * @Route("/", name="productos")
     */
    public function productosAction()
    {
        return $this->render('ProductosBundle:Default:index.html.twig');
    }

    

}
