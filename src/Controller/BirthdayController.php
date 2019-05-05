<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BirthdayController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index()
    {
        // return $this->json([
        //     'message' => 'Welcome to your new controller!',
        //     'path' => 'src/Controller/BirthdayController.php',
        // ]);

        return new Response('merpppp');
    }


    /**
     * @Route("/add")
     */
    public function add()
    {
    }
}
