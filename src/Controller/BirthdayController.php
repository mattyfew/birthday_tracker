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
        $birthdays = [
            [
                'name' => 'Matt Fewer',
                'birthday' => 'January 12, 1989'
            ],
            [
                'name' => 'Loretta Levin',
                'birthday' => 'April 14, 1989'
            ],
            [
                'name' => 'Carolyn Fewer',
                'birthday' => 'December 24, 1960'
            ]
        ];

        return $this->render('birthdays/show.html.twig', [
            'birthdays' => $birthdays
        ]);
    }


    /**
     * @Route("/add")
     */
    public function add()
    {

    }
}
