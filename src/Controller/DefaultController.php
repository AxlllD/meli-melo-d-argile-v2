<?php

namespace App\Controller;

use App\Repository\LessonRepository;
use App\Repository\SaleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'app_default')]
    public function index(SaleRepository $repository): Response
    {
        return $this->render('index.html.twig', ['sales' => $repository->findAll()]);
    }

    #[Route('/cart', name: 'app_cart')]
    public function contact(): Response
    {
        return $this->render('contact.html.twig');
    }

    #[Route('/lesson', name: 'app_lesson')]
    public function lesson(LessonRepository $repository): Response
    {
        return $this->render('lesson.html.twig', ['lessons' => $repository->findAll()]);
    }
}
