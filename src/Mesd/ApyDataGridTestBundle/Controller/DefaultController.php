<?php

namespace Mesd\ApyDataGridTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MesdApyDataGridTestBundle:Default:index.html.twig', array('name' => $name));
    }
}