<?php


namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

/**
 * Description of VoyagesController
 *
 * @author kevin
 */
class VoyagesController extends AbstractController {
    /**
     * @route("/",name="accueil")
     * @return Response
     */
    public function index():Response{
        return $this->render("pages/acceuil.html.twig");
}
