<?php

namespace Mesd\ApyDataGridTestBundle\Controller;

use APY\DataGridBundle\Grid\Source\Entity;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MesdApyDataGridTestBundle:Default:index.html.twig', array('name' => $name));
    }
    
    public function myGridAction()
    {
        // Creates a simple grid based on your entity (ORM)
        $source = new Entity('MesdApyDataGridTestBundle:Everything');

        // Get a Grid instance
        $grid = $this->get('grid');

        // Attach the source to the grid
        $grid->setSource($source);

        // Return the response of the grid to the template
        return $grid->getGridResponse('MesdApyDataGridTestBundle::myGrid.html.twig');
    }
}
