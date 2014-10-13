<?php

namespace LinCC\ComposeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class ComposeController extends Controller
{
    /**
     * @Route("/compose", name="compose")
     * @Method({"GET"})
     * @Template
     */
    public function homeAction()
    {
        return array();
    }
}
