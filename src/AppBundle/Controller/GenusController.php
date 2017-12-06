<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GenusController extends Controller
{
    /**
     * @Route("/genus/{name}")
     * @param $name
     * @return mixed
     */
    public function showAction($name)
    {
        return $this->render('genus/show.twig', [
            'name'      => $name,
            'values'    => ['Freedom', 'Accountability', 'Energy', 'Attitude']
        ]);
    }
}