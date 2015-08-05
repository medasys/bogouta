<?php

namespace Free\AnamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


    /**
     * @Route("/demande")
     */

class DemandeController extends Controller
{
    /**
     * @Route("/ajouter")
     * @Template()
     */
    public function ajouterAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/lister")
     * @Template()
     */
    public function listerAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/modifier")
     * @Template()
     */
    public function modifierAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/voir")
     * @Template()
     */
    public function voirAction()
    {
        return array(
                // ...
            );    }

}
