<?php

namespace Free\AnamBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

    /**
     * @Route("/etablissement")
     */
class EtablissementController extends Controller
{
    /**
     * @Route("/ajouter",name="free_anam_etablissement_ajouter")
     * @Template()
     */
    public function ajouterAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $entity = new \Free\AnamBundle\Entity\Etablissement();
        $form = $this->get('form.factory')->create(new \Free\AnamBundle\Form\EtablissementType(), $entity);
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('free_anam_etablissement_see', array('id' => $entity->getId())));
        }
//        var_dump($form->createView());
        return array(
            'form' => $form->createView()
        );   
        
    }

    /**
     * @Route("/modifier/{id}", name="free_anam_etablissement_modifier")
     * @Template()
     */
    public function modifierAction($id, \Symfony\Component\HttpFoundation\Request $request)
    {
       $entity = $this->getDoctrine()->getManager()->getRepository("FreeAnamBundle:Etablissement")->find($id);
        $form = $this->get('form.factory')->create(new \Free\AnamBundle\Form\EtablissementType, $entity);
        
        if ($form->handleRequest($request)->isValid()) {
            
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('free_anam_etablissement_see', array('id' => $entity->getId())));
        }

        return array(
            'form' => $form->createView());  
        
    }

    /**
     * @Route("/voir/{id}", name= "free_anam_etablissement_see")
     * @Template()
     */
    public function voirAction($id)
    {
         $entity = $this->getDoctrine()
        ->getRepository('FreeAnamBundle:Etablissement')
        ->find($id);

       
        return array(
            "entity"=>$entity
                // ...
            );    
    }

    /**
     * @Route("/lister", name="free_anam_etablissement_lister")
     * @Template()
     */
    public function listerAction()
    {
       $entities = $this->getDoctrine()->getManager()->getRepository("FreeAnamBundle:Etablissement")->findAll();

        return array(
            'entities' => $entities
        );      
        
    }

}
