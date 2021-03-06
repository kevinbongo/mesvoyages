<?php

namespace App\Controller\admin;

use App\Entity\Visite;
use App\Repository\VisiteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Description of AdminVoyagesController
 *
 * @author kevin
 */
class AdminVoyagesController extends AbstractController {
    /**
     * 
     * @var VisiteRepository
     */
    private $repository;
    /**
     * 
     * @var EntityManagerInterface
     */
    private $om;
    /**
     * 
     * @param VisiteRepository $repository
     */
    public function __construct(VisiteRepository $repository, EntityManagerInterface $om) {
       $this->repository=$repository ;
       $this->om=$om;
    }
    /**
     * @route("/admin",name="admin.voyages")
     * @return Response
     */
    public function index():Response{
        $visites=$this->repository->findAllOrderBy('datecreation','DESC');
        return $this->render("admin/admin.voyages.html.twig",[
            'visites'=>$visites
        ]);
}
    /**
     * @Route("/admin/suppr/{id}",name="admin.voyages.suppr")
     * @param Visite $visite
     * @return Response
     */
    public function suppr(Visite $visite):Response{
        $this->om->remove($visite);
        $this->om->flush();
        return $this->redirectToRoute('admin.voyages');
    }
}
