<?php

namespace LinCC\MainPageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class MainPageController extends Controller
{
    /**
     * @Route("/", name="home")
     * @Method({"GET"})
     * @Template
     */
    public function homeAction()
    {
        return array();
    }
}
