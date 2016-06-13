<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function registerAction()
    {
        return $this->render('BlogBundle:User:register.html.twig', array(
            // ...
        ));
    }

    public function loginAction()
    {
        return $this->render('BlogBundle:User:login.html.twig', array(
            // ...
        ));
    }

    public function logoutAction()
    {
        return $this->render('BlogBundle:User:logout.html.twig', array(
            // ...
        ));
    }

}
