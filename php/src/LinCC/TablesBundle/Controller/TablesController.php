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

        $frag = $this->getRequest()->query->get('frag', '0');
        $from = $this->getRequest()->query->get('from', 0);
        $qty  = $this->getRequest()->query->get('qty', 30);

        switch ($name) {
            case self::T_PLC_CONNECTION:
                return $this->forward('LinCCTablesBundle:Tables:displayTablePLCConnection', array(
                    'frag' => $frag,
                    'from' => $from,
                    'qty'  => $qty
                ));
            case self::T_VARLIST:
                return $this->forward('LinCCTablesBundle:Tables:displayTableVarlist', array(
                    'frag' => $frag,
                    'from' => $from,
                    'qty'  => $qty
                ));
            default:
                return new Response(
                    $content = json_encode(array(
                        'error' => $httpErrorMsg)),
                    $status = $httpErrorStatusCode,
                    $headers = array('Content-Type' => 'application/json'));
        }
    }

    /**
     * @Template("LinCCTablesBundle:Tables:plcconnection.html.twig")
     */
    public function displayTablePLCConnectionAction($frag = NULL, $from = 0, $qty = 30)
    {
        if (!is_null($frag) && $frag === '1') {
            return $this->forward('LinCCTablesBundle:Tables:displayFragPLCConnection', array(
                    'from' => $from,
                    'qty'  => $qty
                ));
        }

        $em = $this->getDoctrine()->getManager();
        $plcconnections = $em->getRepository('LinCCTablesBundle:PLCConnection')
                ->findBy(array(), NULL, $qty);

        return array('plcconnections' => $plcconnections);
    }

    /**
     * @Template("LinCCTablesBundle:Tables:fragplcconnection.html.twig")
     */
    public function displayFragPLCConnectionAction($from = 0, $qty = 30)
    {
        $em = $this->getDoctrine()->getManager();

        $plcconnections = $em->getRepository('LinCCTablesBundle:PLCConnection')
                ->findBy(array(), NULL, $qty, $from);

        return array('plcconnections' => $plcconnections);
    }

    /**
     * @Template("LinCCTablesBundle:Tables:varlist.html.twig")
     */
    public function displayTableVarlistAction($frag = NULL, $from = 0, $qty = 30)
    {
        if (!is_null($frag) && $frag === '1') {
            return $this->forward('LinCCTablesBundle:Tables:displayFragVarlist', array(
                    'from' => $from,
                    'qty'  => $qty
                ));
        }

        $em = $this->getDoctrine()->getManager();
        $vars = $em->getRepository('LinCCTablesBundle:VarList')
                ->findBy(array(), NULL, $qty);

        return array('vars' => $vars);
    }

    /**
     * @Template("LinCCTablesBundle:Tables:fragvarlist.html.twig")
     */
    public function displayFragVarlistAction($from = 0, $qty = 30)
    {
        $em = $this->getDoctrine()->getManager();

        $vars = $em->getRepository('LinCCTablesBundle:VarList')
                ->findBy(array(), NULL, $qty, $from);

        return array('vars' => $vars);
    }
}
