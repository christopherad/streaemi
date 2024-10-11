<?php

declare(strict_types=1);

namespace App\Controller;
use Symfony\Component\Rooting\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController{
    #[Route('/')]
    public function home(string $name){
        return new Response('Welcome to Streaemi $name !');
    }

 //   public function movie(string $name, string $category): Response{
 //       return;
 //   }
}