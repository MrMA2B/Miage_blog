<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function home()
    {
        return new Response(content: 'Homepage Page !');
    }

    /**
     * @Route("/contact")
     */
    public function contact(): Response
    {
        return new Response(content: 'Contact Page');
    }
}