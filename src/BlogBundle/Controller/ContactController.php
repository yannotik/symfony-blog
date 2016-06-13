<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class ContactController extends Controller{



    public function showContacts()
    {
        return $this->render('BlogBundle:Blocks:navbar.html.twig', array(
            // ...
        ));
    }
}