<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

/**
 * Description of AccueilController
 *
 * @author kevin
 */


class AccueilController extends AbstractController {
    
    /**
     * 
     * @var Environment
     */
    
  //  private $twig;
    /**
     * 
     * @param Environment $twig
     */
 //   public function __construct(Environment $twig) {
 //       $this->twig = $twig;
 //   }

    /**
     * @route("/",name="accueil")
     * @return Response
     */
    public function index():Response{
        return $this->render("pages/acceuil.html.twig");
    }
}
