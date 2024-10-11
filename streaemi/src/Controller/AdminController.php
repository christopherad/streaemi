<?php
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Route;


class AdminController extends AbstractController{
    #[Route('/abonnement/{id}', name:'admin')]
    public function index(Admin $admin): Response{
        return $this->render("user/admin.html.twig");
    }
}