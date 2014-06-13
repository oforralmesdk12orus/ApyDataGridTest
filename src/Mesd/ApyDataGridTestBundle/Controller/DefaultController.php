<?php

namespace Mesd\ApyDataGridTestBundle\Controller;

use APY\DataGridBundle\Grid\Source\Entity;
use APY\DataGridBundle\Grid\Source\Vector;
use Doctrine\ORM\Query;
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
        //$source = new Entity('MesdApyDataGridTestBundle:Everything');
        
        $doctrine = $this->getDoctrine();
        $manager = $doctrine->getManager();
        $repository = $manager->getRepository('MesdApyDataGridTestBundle:Everything');
        $queryBuilder = $repository->createQueryBuilder('e');
        $query = $queryBuilder->getQuery();
        $entity = $query->getResult(Query::HYDRATE_ARRAY);

        $source = new Vector($entity);
        
        // Get a Grid instance
        $grid = $this->get('grid');

        // Attach the source to the grid
        $grid->setSource($source);

        // Return the response of the grid to the template
        return $grid->getGridResponse('MesdApyDataGridTestBundle::myGrid.html.twig');
    }
}
