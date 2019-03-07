<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Sejour;
use App\Repository\SejourRepository;

class StPaulController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(SejourRepository $repo)
    {   
        $sejours = $repo->findAll();
        return $this->render('home/index.html.twig', [
            'sejours' => $sejours,
        ]);
    }
}
