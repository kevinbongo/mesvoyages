<?php


namespace App\Controller;

use App\Repository\VisiteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


/**
 * Description of VoyagesController
 *
 * @author kevin
 */
class VoyagesController extends AbstractController {
    /**
     * 
     * @var VisiteRepository
     */
    private $repository;
    /**
     * 
     * @param VisiteRepository $repository
     */
    public function __construct(VisiteRepository $repository) {
       $this->repository=$repository ;
    }
    /**
     * @route("/voyages",name="voyages")
     * @return Response
     */
    public function index():Response{
        $visites=$this->repository->findAll();
        return $this->render("pages/voyages.html.twig",[
            'visites'=>$visites
        ]);
}
}