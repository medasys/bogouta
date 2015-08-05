<?php

namespace Free\AnamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demande
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Free\AnamBundle\Entity\DemandeRepository")
 */
class Demande
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nDemande", type="string", length=9)
     */
    private $nDemande;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=100)
     */
    private $niveau;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateInscription", type="date")
     */
    private $dateInscription;
    
    /**
     * @var string
     *
     * @ORM\Column(name="anneeUniversitaire", type="string", length=15)
     */
    private $anneeUniversitaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateValidation", type="date")
     */
    private $dateValidation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="envoyeCnops", type="date")
     */
    private $envoyeCnops;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="envoyeAnam", type="date")
     */
    private $envoyeAnam;

    /**
     * @var boolean
     *
     * @ORM\Column(name="reponseAnam", type="boolean")
     */
    private $reponseAnam;

    /**
     * @var string
     *
     * @ORM\Column(name="motifRejet", type="text")
     */
    private $motifRejet;

    /**
     * @var string
     *
     * @ORM\Column(name="assure", type="string", length=7)
     */
    private $assure;

    /**
     * @var string
     *
     * @ORM\Column(name="regime", type="string", length=20)
     */
    private $regime;
    
     /**
   * @ORM\ManyToOne(targetEntity="Free\AnamBundle\Entity\Etudiant",cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
    
    private $etudiant;
    
    /**
   * @ORM\ManyToOne(targetEntity="Free\AnamBundle\Entity\Etablissement",cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
    private $etablissement;
    
     /**
   * @ORM\ManyToOne(targetEntity="Free\AnamBundle\Entity\Faculte",cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
    private $faculte;
    
     /**
   * @ORM\ManyToOne(targetEntity="Free\AnamBundle\Entity\Filiere",cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
    private $filiere;
    
     /**
   * @ORM\ManyToOne(targetEntity="Free\AnamBundle\Entity\Cnops",cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
    private $cnops;
    


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nDemande
     *
     * @param string $nDemande
     * @return Demande
     */
    public function setNDemande($nDemande)
    {
        $this->nDemande = $nDemande;

        return $this;
    }

    /**
     * Get nDemande
     *
     * @return string 
     */
    public function getNDemande()
    {
        return $this->nDemande;
    }

    /**
     * Set niveau
     *
     * @param string $niveau
     * @return Demande
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }

    /**
     * Get niveau
     *
     * @return string 
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set dateInscription
     *
     * @param \DateTime $dateInscription
     * @return Demande
     */
    public function setDateInscription($dateInscription)
    {
        $this->dateInscription = $dateInscription;

        return $this;
    }

    /**
     * Get dateInscription
     *
     * @return \DateTime 
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Set anneeUniversitaire
     *
     * @param string $anneeUniversitaire
     * @return Demande
     */
    public function setAnneeUniversitaire($anneeUniversitaire)
    {
        $this->anneeUniversitaire = $anneeUniversitaire;

        return $this;
    }

    /**
     * Get anneeUniversitaire
     *
     * @return string 
     */
    public function getAnneeUniversitaire()
    {
        return $this->anneeUniversitaire;
    }

    /**
     * Set dateValidation
     *
     * @param \DateTime $dateValidation
     * @return Demande
     */
    public function setDateValidation($dateValidation)
    {
        $this->dateValidation = $dateValidation;

        return $this;
    }

    /**
     * Get dateValidation
     *
     * @return \DateTime 
     */
    public function getDateValidation()
    {
        return $this->dateValidation;
    }

    /**
     * Set envoyeCnops
     *
     * @param \DateTime $envoyeCnops
     * @return Demande
     */
    public function setEnvoyeCnops($envoyeCnops)
    {
        $this->envoyeCnops = $envoyeCnops;

        return $this;
    }

    /**
     * Get envoyeCnops
     *
     * @return \DateTime 
     */
    public function getEnvoyeCnops()
    {
        return $this->envoyeCnops;
    }

    /**
     * Set envoyeAnam
     *
     * @param \DateTime $envoyeAnam
     * @return Demande
     */
    public function setEnvoyeAnam($envoyeAnam)
    {
        $this->envoyeAnam = $envoyeAnam;

        return $this;
    }

    /**
     * Get envoyeAnam
     *
     * @return \DateTime 
     */
    public function getEnvoyeAnam()
    {
        return $this->envoyeAnam;
    }

    /**
     * Set reponseAnam
     *
     * @param boolean $reponseAnam
     * @return Demande
     */
    public function setReponseAnam($reponseAnam)
    {
        $this->reponseAnam = $reponseAnam;

        return $this;
    }

    /**
     * Get reponseAnam
     *
     * @return boolean 
     */
    public function getReponseAnam()
    {
        return $this->reponseAnam;
    }

    /**
     * Set motifRejet
     *
     * @param string $motifRejet
     * @return Demande
     */
    public function setMotifRejet($motifRejet)
    {
        $this->motifRejet = $motifRejet;

        return $this;
    }

    /**
     * Get motifRejet
     *
     * @return string 
     */
    public function getMotifRejet()
    {
        return $this->motifRejet;
    }

    /**
     * Set assure
     *
     * @param string $assure
     * @return Demande
     */
    public function setAssure($assure)
    {
        $this->assure = $assure;

        return $this;
    }

    /**
     * Get assure
     *
     * @return string 
     */
    public function getAssure()
    {
        return $this->assure;
    }

    /**
     * Set regime
     *
     * @param string $regime
     * @return Demande
     */
    public function setRegime($regime)
    {
        $this->regime = $regime;

        return $this;
    }

    /**
     * Get regime
     *
     * @return string 
     */
    public function getRegime()
    {
        return $this->regime;
    }

    /**
     * Set etudiant
     *
     * @param \Free\AnamBundle\Entity\Etudiant $etudiant
     * @return Demande
     */
    public function setEtudiant(\Free\AnamBundle\Entity\Etudiant $etudiant)
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    /**
     * Get etudiant
     *
     * @return \Free\AnamBundle\Entity\Etudiant 
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    /**
     * Set etablissement
     *
     * @param \Free\AnamBundle\Entity\Etablissement $etablissement
     * @return Demande
     */
    public function setEtablissement(\Free\AnamBundle\Entity\Etablissement $etablissement)
    {
        $this->etablissement = $etablissement;

        return $this;
    }

    /**
     * Get etablissement
     *
     * @return \Free\AnamBundle\Entity\Etablissement 
     */
    public function getEtablissement()
    {
        return $this->etablissement;
    }

    /**
     * Set faculte
     *
     * @param \Free\AnamBundle\Entity\Faculte $faculte
     * @return Demande
     */
    public function setFaculte(\Free\AnamBundle\Entity\Faculte $faculte)
    {
        $this->faculte = $faculte;

        return $this;
    }

    /**
     * Get faculte
     *
     * @return \Free\AnamBundle\Entity\Faculte 
     */
    public function getFaculte()
    {
        return $this->faculte;
    }

    /**
     * Set filiere
     *
     * @param \Free\AnamBundle\Entity\Filiere $filiere
     * @return Demande
     */
    public function setFiliere(\Free\AnamBundle\Entity\Filiere $filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get filiere
     *
     * @return \Free\AnamBundle\Entity\Filiere 
     */
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set cnops
     *
     * @param \Free\AnamBundle\Entity\Cnops $cnops
     * @return Demande
     */
    public function setCnops(\Free\AnamBundle\Entity\Cnops $cnops)
    {
        $this->cnops = $cnops;

        return $this;
    }

    /**
     * Get cnops
     *
     * @return \Free\AnamBundle\Entity\Cnops 
     */
    public function getCnops()
    {
        return $this->cnops;
    }
}
