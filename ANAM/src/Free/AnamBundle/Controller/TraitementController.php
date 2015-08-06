<?php

namespace Free\AnamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

  /**
     * @Route("/traitement")
     */


class TraitementController extends Controller
{
    /**
     * @Route("/importer")
     * @Template()
     */
    public function importerAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/exporter")
     * @Template()
     */
    public function exporterAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/controle")
     * @Template()
     */
    public function controleAction()
    {
        return array(
                // ...
            );    }

}
