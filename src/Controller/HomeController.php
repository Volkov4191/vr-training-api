<?php

namespace App\Controller;

use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Домашний контроллер
 *
 * Class HomeController
 * @package App\Controller
 */
class HomeController extends AbstractController
{
    /**
     * @Route("/")
     * @throws Exception
     */
    public function index(): Response
    {
        $number = random_int(0, 100);

        return $this->render('main/index.html.twig', [
            'number' => $number,
        ]);
    }
}