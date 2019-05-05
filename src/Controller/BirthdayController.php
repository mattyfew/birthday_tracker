<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BirthdayController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function index()
    {
        $birthdays = [
            [
                'id' => 1,
                'name' => 'Matt Fewer',
                'birthday' => 'January 12, 1989'
            ],
            [
                'id' => 2,
                'name' => 'Loretta Levin',
                'birthday' => 'April 14, 1989'
            ],
            [
                'id' => 3,
                'name' => 'Carolyn Fewer',
                'birthday' => 'December 24, 1960'
            ]
        ];

        return $this->render('birthdays/show.html.twig', [
            'birthdays' => $birthdays
        ]);
    }


    /**
     * @Route("/add", name="add_birthday", methods={"GET", "POST"})
     */
    public function add()
    {
        return $this->render('birthdays/add.html.twig');
    }


    /**
     * @Route("/show", name="show_birthday")
     */
    public function show()
    {

    }


    /**
     * @Route("/fav/{id}", name="toggle_fav")
     */
    public function toggleFav($id)
    {
        // do the faving
    }
}
