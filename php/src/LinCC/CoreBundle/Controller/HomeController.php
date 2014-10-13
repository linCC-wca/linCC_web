<?php

namespace LinCC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class HomeController extends Controller
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
