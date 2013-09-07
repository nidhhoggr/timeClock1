<?php

namespace OSE\TimeClockBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OSETimeClockBundle:Default:index.html.twig');
    }
}
