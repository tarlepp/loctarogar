<?php

namespace App\Controller;

use App\Repository\TreeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     *
     * @param \App\Repository\TreeRepository $treeRepository
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(TreeRepository $treeRepository)
    {
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'repository_name' => get_class($treeRepository),
        ]);
    }
}
