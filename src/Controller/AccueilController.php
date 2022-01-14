<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

/**
 * Description of AccueilController
 *
 * @author kevin
 */


class AccueilController extends AbstractController {
     /**
     * @route("/",name="acceuil")
     * @return Response
     */
    public function index():Response{
        return $this->render("pages/acceuil.html.twig");
    }
}
