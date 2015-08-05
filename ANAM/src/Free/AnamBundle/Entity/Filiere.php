<?php

namespace Free\AnamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filiere
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Free\AnamBundle\Entity\FiliereRepository")
 */
class Filiere
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
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100)
     */
    private $description;
    
    /**
   * @ORM\ManyToOne(targetEntity="Free\AnamBundle\Entity\Etablissement",cascade={"persist"})
   * @ORM\JoinColumn(nullable=false)
   */
    private $etablissement;
    
    /**
    * @ORM\OneToMany(targetEntity="Free\AnamBundle\Entity\Demande", mappedBy="filiere", cascade={"remove", "persist"})
    */

    protected $demande;


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
     * Set nom
     *
     * @param string $nom
     * @return Filiere
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
     * Set description
     *
     * @param string $description
     * @return Filiere
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set etablissement
     *
     * @param \Free\AnamBundle\Entity\Etablissement $etablissement
     * @return Filiere
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
     * @return Filiere
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
}
