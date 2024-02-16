<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\User;

class UserController extends Controller
{
    /**
     * @Route("/insert/user", name="insert_user")
     */
    public function insertUser()
    {
        $user = new User();
        $user->setUsername("Alejandro Villamayor");
        $user->setPassword("Alejandro_Villamayor");
        $user->setEmail("avillamayor720@gmail.com");

        $em = $this->getDoctrine()->getManager();

        $em->persist($user);

        $em->flush();

        return new Response("Se inserto nuevo usuario con ID:" . $user->getId());
    }

    /**
     * @Route("/get/usuarios", name="get_usuarios")
     */

     public function getAllPost()
     {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository('AppBundle:User');
        $users = $repository->findAll();
        dump($users);

        return new Response('Datos Tabla Post');

     }
}
