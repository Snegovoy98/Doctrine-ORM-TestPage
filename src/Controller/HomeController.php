<?php

namespace App\Controller;

use App\Entity\Album;
use App\Repository\AlbumRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function index()
    {
        /** @var AlbumRepository $repository */
        $manager = $this->getDoctrine()->getManager();
        $repository = $manager->getRepository(Album::class);
        $text = $repository->getAllText();
        var_dump($text);

        return $this->render('index/index.html.twig');
    }
}