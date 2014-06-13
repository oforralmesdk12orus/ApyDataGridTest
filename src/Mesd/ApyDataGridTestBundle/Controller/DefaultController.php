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
        $queryBuilder->select('e.id AS everythingId');
        $queryBuilder->addSelect('e.sampleBoolean');
        $queryBuilder->addSelect('e.sampleInteger');
        $queryBuilder->addSelect('e.sampleSmallInt');
        $queryBuilder->addSelect('e.sampleBigInt');
        $queryBuilder->addSelect('e.sampleString');
        $queryBuilder->addSelect('e.sampleText');
        $queryBuilder->addSelect('e.sampleDatetime');
        $queryBuilder->addSelect('e.sampleDate');
        $queryBuilder->addSelect('e.sampleTime');
        $queryBuilder->addSelect('e.sampleDecimal');
        $queryBuilder->addSelect('e.sampleFloat');
        $queryBuilder->addSelect('a.id AS anotherId');
        $queryBuilder->addSelect('a.exampleBoolean');
        $queryBuilder->addSelect('a.exampleInteger');
        $queryBuilder->addSelect('a.exampleSmallInt');
        $queryBuilder->addSelect('a.exampleBigInt');
        $queryBuilder->addSelect('a.exampleString');
        $queryBuilder->addSelect('a.exampleText');
        $queryBuilder->addSelect('a.exampleDatetime');
        $queryBuilder->addSelect('a.exampleDate');
        $queryBuilder->addSelect('a.exampleTime');
        $queryBuilder->addSelect('a.exampleDecimal');
        $queryBuilder->addSelect('a.exampleFloat');
        $queryBuilder->leftJoin('e.another', 'a');
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
