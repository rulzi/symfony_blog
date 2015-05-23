<?php

namespace Afandi\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('AfandiBlogBundle:Home:index.html.twig');
    }
}
