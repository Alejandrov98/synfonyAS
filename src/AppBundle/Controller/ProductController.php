<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Product;

class ProductController extends Controller
{


   /**
    * @Route("/get/product", name="get_product")
    */

   public function getAllProducts()
   {
      $em = $this->getDoctrine()->getManager();
      $repository = $em->getRepository("AppBundle:Product");
      $products = $repository->findAll();

      dump($products);

      return new Response("Tabla de productos");
   }



   
   /**
    * @Route("/update/product/{id}", name="update_product")
    */
    
    public function updateProduct($id){
      $em = $this->getDoctrine()->getManager();
      $product = $em->getRepository("AppBundle:Product")->find($id);
      if (!$product) {
         throw $this->createNotFoundException(
            'El producto con ID '-$id. 'no existe'
         );
      }
      $product->setName('Nombre Actualizado');
      $product->setImage('Imagen actualizada');
      $product->setCategory('Categoria Actualizada');  

      $em->flush();

      return new Response ('Se ha actualizado el producto con ID:'.$id);
    }

       /**
    * @Route("/delete/product/{id}", name="delete_product")
    */
    
    public function deleteProduct($id){

      $em = $this->getDoctrine()->getManager();
      $product = $em->getRepository("AppBundle:Product")->find($id);
      if (!$product) {
         throw $this->createNotFoundException(
            'El producto con ID '.$id. 'no existe'
         );
      }
      $em->remove($product); 
      $em->flush();


      return new Response ('Se ha borrado el producto con ID:'.$id);
    }
    
   }