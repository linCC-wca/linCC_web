<?php

namespace LinCC\DrawBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DrawController extends Controller
{
    /**
     * @Route("/draw", name="draw")
     * @Method({"GET"})
     * @Template
     */
    public function homeAction()
    {
        return array();
    }
}
