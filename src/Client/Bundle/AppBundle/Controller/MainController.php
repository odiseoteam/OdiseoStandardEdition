<?php

namespace Client\Bundle\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class MainController extends Controller
{
    public function indexAction(Request $request)
    {
        return $this->render('ClientAppBundle:Main:index.html.twig', [
        ]);
    }
}
