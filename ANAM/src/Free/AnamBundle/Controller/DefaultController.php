<?php

namespace Free\AnamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
     * @Route("/d")
     * 
     */
class DefaultController extends Controller
{
    /**
     * @Route("/hello/{name}",  name="ajouter_etablissement")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
    
   
     /**
     * @Route("/h")
     * @Template()
     */
    public function ajouteretablissementAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $entity = new \Free\AnamBundle\Entity\Etablissement();
        $form = $this->get('form.factory')->create(new \Free\AnamBundle\Form\EtablissementType, $entity);
        
        if($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('ajouter_etablissement', array('id' => $entity->getId())));   }
             return array(
                'form' => $form->createView()
            ); 
    } 
    
    /**
     * @Route("/a")
     * @Template
     */
    public function inscriptionAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $entity = new \Free\AnamBundle\Entity\Demande();
        $form = $this->get('form.factory')->create(new \Free\AnamBundle\Form\DemandeType, $entity);
        
        if($form->handleRequest($request)->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('_index', array('id' => $entity->getId())));   }
             return array(
                'forms' => $form->createView()
            ); 
    }
    
}
