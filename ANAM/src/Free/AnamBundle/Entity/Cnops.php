<?php

namespace Free\AnamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cnops
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Free\AnamBundle\Entity\CnopsRepository")
 */
class Cnops
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="nombreEtudiant", type="integer")
     */
    private $nombreEtudiant;

    /**
     * @var integer
     *
     * @ORM\Column(name="montantCotisation", type="integer")
     */
    private $montantCotisation;

    /**
     * @var string
     *
     * @ORM\Column(name="modePaiement", type="string", length=20)
     */
    private $modePaiement;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=9)
     */
    private $reference;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datePaiement", type="date")
     */
    private $datePaiement;
    
    /**
    * @ORM\OneToMany(targetEntity="Free\AnamBundle\Entity\Demande", mappedBy="cnops", cascade={"remove", "persist"})
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
     * Set date
     *
     * @param \DateTime $date
     * @return Cnops
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set nombreEtudiant
     *
     * @param integer $nombreEtudiant
     * @return Cnops
     */
    public function setNombreEtudiant($nombreEtudiant)
    {
        $this->nombreEtudiant = $nombreEtudiant;

        return $this;
    }

    /**
     * Get nombreEtudiant
     *
     * @return integer 
     */
    public function getNombreEtudiant()
    {
        return $this->nombreEtudiant;
    }

    /**
     * Set montantCotisation
     *
     * @param integer $montantCotisation
     * @return Cnops
     */
    public function setMontantCotisation($montantCotisation)
    {
        $this->montantCotisation = $montantCotisation;

        return $this;
    }

    /**
     * Get montantCotisation
     *
     * @return integer 
     */
    public function getMontantCotisation()
    {
        return $this->montantCotisation;
    }

    /**
     * Set modePaiement
     *
     * @param string $modePaiement
     * @return Cnops
     */
    public function setModePaiement($modePaiement)
    {
        $this->modePaiement = $modePaiement;

        return $this;
    }

    /**
     * Get modePaiement
     *
     * @return string 
     */
    public function getModePaiement()
    {
        return $this->modePaiement;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return Cnops
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set datePaiement
     *
     * @param \DateTime $datePaiement
     * @return Cnops
     */
    public function setDatePaiement($datePaiement)
    {
        $this->datePaiement = $datePaiement;

        return $this;
    }

    /**
     * Get datePaiement
     *
     * @return \DateTime 
     */
    public function getDatePaiement()
    {
        return $this->datePaiement;
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
     * @return Cnops
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
