<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AlbumController extends AbstractController
{
    public function index()
    {
        return $this->render('index/index.html.twig');
    }
}