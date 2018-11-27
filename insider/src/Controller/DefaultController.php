<?php
/**
 * Created by PhpStorm.
 * User: walid
 * Date: 27/11/2018
 * Time: 17:35
 */

namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class DefaultController extends AbstractController
{
    /**
     * @Route("/", methods={"GET"})
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function home()
    {
        return $this->render('Default/home.html.twig');
    }
}