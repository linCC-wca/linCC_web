<?php

namespace LinCC\TablesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class TablesController extends Controller
{
    /**
     * database table names
     */
    const T_PLC_CONNECTION = 'plc_connection';
    const T_VARLIST = 'varlist';

    /**
     * @Route("/table/{name}")
     * @Template()
     */
    public function displayTableAction($name)
    {
        $httpErrorStatusCode = 400;
        $httpErrorMsg = "Invalid table name";

        switch ($name) {
            case self::T_PLC_CONNECTION:
                return $this->displayTablePLCConnection();
            case self::T_VARLIST:
                return $this->displayTableVarlist();
            default:
                return new Response($content = $httpErrorMsg,
                        $status = $httpErrorStatusCode);
        }
    }

    private function displayTablePLCConnection()
    {
        throw new \Exception('Not yet implemented');
    }

    private function displayTableVarlist()
    {
        throw new \Exception('Not yet implemented');
    }
}
