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
     * @Route("/ajouter", name="free_anam_demande_ajouter")
     * @Template()
     */
    public function ajouterAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        $entity = new \Free\AnamBundle\Entity\Demande();
        $form = $this->get('form.factory')->create(new \Free\AnamBundle\Form\DemandeType(), $entity);
        if ($form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('free_anam_demande_see', array('id' => $entity->getId())));
        }
//        var_dump($form->createView());
        return array(
            'form' => $form->createView()
        );   
        
    }

    /**
     * @Route("/modifier/{id}", name="free_anam_demande_modifier")
     * @Template()
     */
    public function modifierAction($id, \Symfony\Component\HttpFoundation\Request $request)
    {
       $entity = $this->getDoctrine()->getManager()->getRepository("FreeAnamBundle:Demande")->find($id);
        $form = $this->get('form.factory')->create(new \Free\AnamBundle\Form\DemandeType, $entity);
        
        if ($form->handleRequest($request)->isValid()) {
            
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');

            return $this->redirect($this->generateUrl('free_anam_demande_see', array('id' => $entity->getId())));
        }

        return array(
            'form' => $form->createView());  
        
    }

    /**
     * @Route("/voir/{id}", name= "free_anam_demande_see")
     * @Template()
     */
    public function voirAction($id)
    {
         $entity = $this->getDoctrine()
        ->getRepository('FreeAnamBundle:Demande')
        ->find($id);

       
        return array(
            "entity"=>$entity
                // ...
            );    
    }

    /**
     * @Route("/lister", name="free_anam_demande_lister")
     * @Template()
     */
    public function listerAction()
    {
       $entities = $this->getDoctrine()->getManager()->getRepository("FreeAnamBundle:Demande")->findAll();

        return array(
            'entities' => $entities
        );      
        
    }
    
    /**
     * @Route("/supprimer/{id}", name= "free_anam_demande_supprimer")
     * @Template()
     */
    public function supprimerAction($id)
    {
        
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository("FreeAnamBundle:Demande")->find($id);
        $em->remove($entity);
        $em->flush();

        return $this->redirect($this->generateUrl("free_anam_demande_lister"));
        
    }
    
    /**
     * @Route("/envoyer", name="free_anam_demande_envoyer")
     * @Template()
     */
    public function envoyerAction()
    {
       $entities = $this->getDoctrine()->getManager()->getRepository("FreeAnamBundle:Demande")->findAll();

        return array(
            'entities' => $entities
        );      
        
    }
    
    /**
     * @Route("/suivre", name="free_anam_demande_suivre")
     * @Template()
     */
    public function suivreAction()
    {
       $entities = $this->getDoctrine()->getManager()->getRepository("FreeAnamBundle:Demande")->findAll();

        return array(
            'entities' => $entities
        );      
        
    }

}