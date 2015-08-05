<?php

namespace Free\AnamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etablissement
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Free\AnamBundle\Entity\EtablissementRepository")
 */
class Etablissement
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
     * @ORM\Column(name="codeEtablissement", type="string", length=9, nullable=true)
     */
    private $codeEtablissement;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=150, nullable=true)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="codeEtablissementPere", type="string", length=9, nullable=true)
     */
    private $codeEtablissementPere;

    /**
     * @var string
     *
     * @ORM\Column(name="secteur",  type="string", length=7, nullable=true)
     */
    private $secteur;

    /**
     * @var string
     *
     * @ORM\Column(name="nAffiation", type="string", length=9, nullable=true)
     */
    private $nAffiation;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="text", nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="codePostale", type="string", length=9, nullable=true)
     */
    private $codePostale;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=100, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=15, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=30, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=150, nullable=true )
     */
    private $mail;
    
    /**
    * @ORM\OneToMany(targetEntity="Free\AnamBundle\Entity\Demande", mappedBy="etablissement", cascade={"remove", "persist"})
    * 
    */

    protected $demande;
    
    /**
    * @ORM\OneToMany(targetEntity="Free\AnamBundle\Entity\Faculte", mappedBy="etablissement", cascade={"remove", "persist"})
    * 
    */

    protected $faculte;
    
    /**
    * @ORM\OneToMany(targetEntity="Free\AnamBundle\Entity\Filiere", mappedBy="etablissement", cascade={"remove", "persist"})
    * 
    */

    protected $filiere;


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
     * Set codeEtablissement
     *
     * @param string $codeEtablissement
     * @return Etablissement
     */
    public function setCodeEtablissement($codeEtablissement)
    {
        $this->codeEtablissement = $codeEtablissement;

        return $this;
    }

    /**
     * Get codeEtablissement
     *
     * @return string 
     */
    public function getCodeEtablissement()
    {
        return $this->codeEtablissement;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Etablissement
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set codeEtablissementPere
     *
     * @param string $codeEtablissementPere
     * @return Etablissement
     */
    public function setCodeEtablissementPere($codeEtablissementPere)
    {
        $this->codeEtablissementPere = $codeEtablissementPere;

        return $this;
    }

    /**
     * Get codeEtablissementPere
     *
     * @return string 
     */
    public function getCodeEtablissementPere()
    {
        return $this->codeEtablissementPere;
    }

    /**
     * Set secteur
     *
     * @param string $secteur
     * @return Etablissement
     */
    public function setSecteur($secteur)
    {
        $this->secteur = $secteur;

        return $this;
    }

    /**
     * Get secteur
     *
     * @return string 
     */
    public function getSecteur()
    {
        return $this->secteur;
    }

    /**
     * Set nAffiation
     *
     * @param string $nAffiation
     * @return Etablissement
     */
    public function setNAffiation($nAffiation)
    {
        $this->nAffiation = $nAffiation;

        return $this;
    }

    /**
     * Get nAffiation
     *
     * @return string 
     */
    public function getNAffiation()
    {
        return $this->nAffiation;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Etablissement
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set codePostale
     *
     * @param string $codePostale
     * @return Etablissement
     */
    public function setCodePostale($codePostale)
    {
        $this->codePostale = $codePostale;

        return $this;
    }

    /**
     * Get codePostale
     *
     * @return string 
     */
    public function getCodePostale()
    {
        return $this->codePostale;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Etablissement
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set tel
     *
     * @param string $tel
     * @return Etablissement
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return Etablissement
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Etablissement
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->demande = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add demande
     *
     * @param \Free\AnamBundle\Entity\Demande $demande
     * @return Etablissement
     */
    public function addDemande(\Free\AnamBundle\Entity\Demande $demande)
    {
        $this->demande[] = $demande;

        return $this;
    }

    /**
     * Remove demande
     *
     * @param \Free\AnamBundle\Entity\Demande $demande
     */
    public function removeDemande(\Free\AnamBundle\Entity\Demande $demande)
    {
        $this->demande->removeElement($demande);
    }

    /**
     * Get demande
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDemande()
    {
        return $this->demande;
    }

    /**
     * Add faculte
     *
     * @param \Free\AnamBundle\Entity\Faculte $faculte
     * @return Etablissement
     */
    public function addFaculte(\Free\AnamBundle\Entity\Faculte $faculte)
    {
        $this->faculte[] = $faculte;

        return $this;
    }

    /**
     * Remove faculte
     *
     * @param \Free\AnamBundle\Entity\Faculte $faculte
     */
    public function removeFaculte(\Free\AnamBundle\Entity\Faculte $faculte)
    {
        $this->faculte->removeElement($faculte);
    }

    /**
     * Get faculte
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFaculte()
    {
        return $this->faculte;
    }

    /**
     * Add filiere
     *
     * @param \Free\AnamBundle\Entity\Filiere $filiere
     * @return Etablissement
     */
    public function addFiliere(\Free\AnamBundle\Entity\Filiere $filiere)
    {
        $this->filiere[] = $filiere;

        return $this;
    }

    /**
     * Remove filiere
     *
     * @param \Free\AnamBundle\Entity\Filiere $filiere
     */
    public function removeFiliere(\Free\AnamBundle\Entity\Filiere $filiere)
    {
        $this->filiere->removeElement($filiere);
    }

    /**
     * Get filiere
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFiliere()
    {
        return $this->filiere;
    }
    
       public function __toString()
    {
        return $this->getNom();
    }
}
