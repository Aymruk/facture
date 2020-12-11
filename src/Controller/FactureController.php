<?php

namespace App\Controller;

use App\Entity\Facture;

use App\Repository\FactureRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FactureController extends AbstractController
{
//    /**
//     * @Route("/facture", name="facture")
//     * @return Response
//     */
//    public function index(): Response
//    {
//        return $this->render('facture/index.html.twig', [
//            'controller_name' => 'FactureController',
//        ]);
//    }

    /**
     * @Route("/facture/list", name="list")
     */
    public function show(): Response
    {
        $facture = $this->getDoctrine()
            ->getRepository(Facture::class)
            ->findAll();

        if(!$facture){
            throw $this->createNotFoundException('Aucune facture trouvée');
        }
        return $this->render('facture/index.html.twig', [
           'factures' => $facture]);


    }
}
