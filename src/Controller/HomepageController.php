<?php


namespace App\Controller;

use App\Entity\User;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomepageController extends AbstractController
{
    #[Route('/', name: 'homepage')]
    public function homepage(): Response
    {
        $user = new User();
        $name = '';
        if ($user->getUsername() === null) {
            $name = 'Unknown';
        } else if ($user->getUsername() !== null) {
            $name = $user->getUsername();
        }
        return $this->render('homepage/homepage.html.twig', [
            'name' => $name,
        ]);
    }}