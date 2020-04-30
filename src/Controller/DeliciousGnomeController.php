<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DeliciousGnomeController extends AbstractController
{
    /**
     * @Route("/delicious/gnome", name="delicious_gnome")
     */
    public function index()
    {
        return new Response($_ENV['APP_ENV']);
    }
}
