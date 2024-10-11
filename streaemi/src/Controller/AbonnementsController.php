<?php
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Route;
use App\Entity\Abonnement;


class AbonnementsController extends AbstractController{
    #[Route('/abonnement/{id}', name:'abonnement')]
    public function index(Abonnement $abonnement): Response{
        return $this->render("user/abonnenments.html.twig");
    }
}