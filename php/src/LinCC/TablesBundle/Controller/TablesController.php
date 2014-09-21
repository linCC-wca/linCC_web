<?php

namespace LinCC\TablesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class TablesController extends Controller
{
    /**
     * database table names
     * TODO use yaml files
     */
    const T_PLC_CONNECTION = 'plc_connection';
    const T_VARLIST = 'varlist';

    /**
     * @Route("/table/{name}", name="display_table")
     * @Method({"GET"})
     */
    public function displayTableAction($name)
    {
        $httpErrorStatusCode = 400;
        $httpErrorMsg = "Invalid table name";

        switch ($name) {
            case self::T_PLC_CONNECTION:
                return $this->forward('LinCCTablesBundle:Tables:displayTablePLCConnection');
            case self::T_VARLIST:
                return $this->forward('LinCCTablesBundle:Tables:displayTableVarlist');
            default:
                return new Response($content = $httpErrorMsg,
                        $status = $httpErrorStatusCode);
        }
    }

    /**
     * @Template("LinCCTablesBundle:Tables:plcconnection.html.twig")
     */
    public function displayTablePLCConnectionAction()
    {
        return array();
    }

    /**
     * @Template("LinCCTablesBundle:Tables:varlist.html.twig")
     */
    public function displayTableVarlistAction()
    {
        return array();
    }
}
