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
     * @Route("/importer", name="free_anam_traitement_importer")
     * @Template()
     */
    public function importerAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/exporter", name="free_anam_traitement_exporter")
     * @Template()
     */
    public function exporterAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/controle", name="free_anam_traitement_controle")
     * @Template()
     */
    public function controleAction()
    {
        return array(
                // ...
            );    }

}