<?php

namespace Free\AnamBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Free\AnamBundle\Entity\EtudiantRepository")
 */
class Etudiant
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
     * @var boolean
     *
     * @ORM\Column(name="marocain", type="boolean")
     */
    private $marocain;

    /**
     * @var string
     *
     * @ORM\Column(name="cin", type="string", length=9)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="carteSejeour", type="string", length=9)
     */
    private $carteSejeour;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100)
     */
    private $prenom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=9)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="situationFamiliale", type="string", length=15)
     */
    private $situationFamiliale;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=20)
     */
    private $pays;

    /**
     * @var string
     *
     * @ORM\Column(name="cne", type="string", length=9)
     */
    private $cne;

    /**
     * @var string
     *
     * @ORM\Column(name="baccalaureat", type="string", length=20)
     */
    private $baccalaureat;

    /**
     * @var string
     *
     * @ORM\Column(name="anneeBac", type="string", length=4)
     */
    private $anneeBac;

    /**
     * @var boolean
     *
     * @ORM\Column(name="couvertureMedicale", type="boolean")
     */
    private $couvertureMedicale;

    /**
     * @var string
     *
     * @ORM\Column(name="regime", type="string", length=20)
     */
    private $regime;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse1", type="text")
     */
    private $adresse1;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse2", type="text")
     */
    private $adresse2;

    /**
     * @var string
     *
     * @ORM\Column(name="gsm", type="string", length=15)
     */
    private $gsm;

    /**
     * @var string
     *
     * @ORM\Column(name="codePostal", type="string", length=9)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="banque", type="string", length=100)
     */
    private $banque;

    /**
     * @var string
     *
     * @ORM\Column(name="compteBancaire", type="string", length=150)
     */
    private $compteBancaire;

    /**
     * @var string
     *
     * @ORM\Column(name="villeEtudiant", type="string", length=30)
     */
    private $villeEtudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="nomPere", type="string", length=100)
     */
    private $nomPere;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomPere", type="string", length=100)
     */
    private $prenomPere;

    /**
     * @var string
     *
     * @ORM\Column(name="cinPere", type="string", length=9)
     */
    private $cinPere;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissancePere", type="date")
     */
    private $dateNaissancePere;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDecesPere", type="date")
     */
    private $dateDecesPere;

    /**
     * @var string
     *
     * @ORM\Column(name="nomMere", type="string", length=100)
     */
    private $nomMere;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomMere", type="string", length=100)
     */
    private $prenomMere;

    /**
     * @var string
     *
     * @ORM\Column(name="cinMere", type="string", length=9)
     */
    private $cinMere;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="naissanceMere", type="date")
     */
    private $naissanceMere;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDecesMere", type="date")
     */
    private $dateDecesMere;

    /**
     * @var string
     *
     * @ORM\Column(name="cinConjoint", type="string", length=9)
     */
    private $cinConjoint;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateMariage", type="date")
     */
    private $dateMariage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDivorce", type="date")
     */
    private $dateDivorce;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDeces", type="date")
     */
    private $dateDeces;
    
    /**
    * @ORM\OneToMany(targetEntity="Free\AnamBundle\Entity\Demande", mappedBy="etudiant", cascade={"remove", "persist"})
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
     * Set marocain
     *
     * @param boolean $marocain
     * @return Etudiant
     */
    public function setMarocain($marocain)
    {
        $this->marocain = $marocain;

        return $this;
    }

    /**
     * Get marocain
     *
     * @return boolean 
     */
    public function getMarocain()
    {
        return $this->marocain;
    }

    /**
     * Set cin
     *
     * @param string $cin
     * @return Etudiant
     */
    public function setCin($cin)
    {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return string 
     */
    public function getCin()
    {
        return $this->cin;
    }

    /**
     * Set carteSejeour
     *
     * @param string $carteSejeour
     * @return Etudiant
     */
    public function setCarteSejeour($carteSejeour)
    {
        $this->carteSejeour = $carteSejeour;

        return $this;
    }

    /**
     * Get carteSejeour
     *
     * @return string 
     */
    public function getCarteSejeour()
    {
        return $this->carteSejeour;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Etudiant
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
     * Set prenom
     *
     * @param string $prenom
     * @return Etudiant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     * @return Etudiant
     */
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime 
     */
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return Etudiant
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set situationFamiliale
     *
     * @param string $situationFamiliale
     * @return Etudiant
     */
    public function setSituationFamiliale($situationFamiliale)
    {
        $this->situationFamiliale = $situationFamiliale;

        return $this;
    }

    /**
     * Get situationFamiliale
     *
     * @return string 
     */
    public function getSituationFamiliale()
    {
        return $this->situationFamiliale;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Etudiant
     */
    public function setPays($pays)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set cne
     *
     * @param string $cne
     * @return Etudiant
     */
    public function setCne($cne)
    {
        $this->cne = $cne;

        return $this;
    }

    /**
     * Get cne
     *
     * @return string 
     */
    public function getCne()
    {
        return $this->cne;
    }

    /**
     * Set baccalaureat
     *
     * @param string $baccalaureat
     * @return Etudiant
     */
    public function setBaccalaureat($baccalaureat)
    {
        $this->baccalaureat = $baccalaureat;

        return $this;
    }

    /**
     * Get baccalaureat
     *
     * @return string 
     */
    public function getBaccalaureat()
    {
        return $this->baccalaureat;
    }

    /**
     * Set anneeBac
     *
     * @param string $anneeBac
     * @return Etudiant
     */
    public function setAnneeBac($anneeBac)
    {
        $this->anneeBac = $anneeBac;

        return $this;
    }

    /**
     * Get anneeBac
     *
     * @return string 
     */
    public function getAnneeBac()
    {
        return $this->anneeBac;
    }

    /**
     * Set couvertureMedicale
     *
     * @param boolean $couvertureMedicale
     * @return Etudiant
     */
    public function setCouvertureMedicale($couvertureMedicale)
    {
        $this->couvertureMedicale = $couvertureMedicale;

        return $this;
    }

    /**
     * Get couvertureMedicale
     *
     * @return boolean 
     */
    public function getCouvertureMedicale()
    {
        return $this->couvertureMedicale;
    }

    /**
     * Set regime
     *
     * @param string $regime
     * @return Etudiant
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
     * Set adresse1
     *
     * @param string $adresse1
     * @return Etudiant
     */
    public function setAdresse1($adresse1)
    {
        $this->adresse1 = $adresse1;

        return $this;
    }

    /**
     * Get adresse1
     *
     * @return string 
     */
    public function getAdresse1()
    {
        return $this->adresse1;
    }

    /**
     * Set adresse2
     *
     * @param string $adresse2
     * @return Etudiant
     */
    public function setAdresse2($adresse2)
    {
        $this->adresse2 = $adresse2;

        return $this;
    }

    /**
     * Get adresse2
     *
     * @return string 
     */
    public function getAdresse2()
    {
        return $this->adresse2;
    }

    /**
     * Set gsm
     *
     * @param string $gsm
     * @return Etudiant
     */
    public function setGsm($gsm)
    {
        $this->gsm = $gsm;

        return $this;
    }

    /**
     * Get gsm
     *
     * @return string 
     */
    public function getGsm()
    {
        return $this->gsm;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     * @return Etudiant
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string 
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set banque
     *
     * @param string $banque
     * @return Etudiant
     */
    public function setBanque($banque)
    {
        $this->banque = $banque;

        return $this;
    }

    /**
     * Get banque
     *
     * @return string 
     */
    public function getBanque()
    {
        return $this->banque;
    }

    /**
     * Set compteBancaire
     *
     * @param string $compteBancaire
     * @return Etudiant
     */
    public function setCompteBancaire($compteBancaire)
    {
        $this->compteBancaire = $compteBancaire;

        return $this;
    }

    /**
     * Get compteBancaire
     *
     * @return string 
     */
    public function getCompteBancaire()
    {
        return $this->compteBancaire;
    }

    /**
     * Set villeEtudiant
     *
     * @param string $villeEtudiant
     * @return Etudiant
     */
    public function setVilleEtudiant($villeEtudiant)
    {
        $this->villeEtudiant = $villeEtudiant;

        return $this;
    }

    /**
     * Get villeEtudiant
     *
     * @return string 
     */
    public function getVilleEtudiant()
    {
        return $this->villeEtudiant;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Etudiant
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set nomPere
     *
     * @param string $nomPere
     * @return Etudiant
     */
    public function setNomPere($nomPere)
    {
        $this->nomPere = $nomPere;

        return $this;
    }

    /**
     * Get nomPere
     *
     * @return string 
     */
    public function getNomPere()
    {
        return $this->nomPere;
    }

    /**
     * Set prenomPere
     *
     * @param string $prenomPere
     * @return Etudiant
     */
    public function setPrenomPere($prenomPere)
    {
        $this->prenomPere = $prenomPere;

        return $this;
    }

    /**
     * Get prenomPere
     *
     * @return string 
     */
    public function getPrenomPere()
    {
        return $this->prenomPere;
    }

    /**
     * Set cinPere
     *
     * @param string $cinPere
     * @return Etudiant
     */
    public function setCinPere($cinPere)
    {
        $this->cinPere = $cinPere;

        return $this;
    }

    /**
     * Get cinPere
     *
     * @return string 
     */
    public function getCinPere()
    {
        return $this->cinPere;
    }

    /**
     * Set dateNaissancePere
     *
     * @param \DateTime $dateNaissancePere
     * @return Etudiant
     */
    public function setDateNaissancePere($dateNaissancePere)
    {
        $this->dateNaissancePere = $dateNaissancePere;

        return $this;
    }

    /**
     * Get dateNaissancePere
     *
     * @return \DateTime 
     */
    public function getDateNaissancePere()
    {
        return $this->dateNaissancePere;
    }

    /**
     * Set dateDecesPere
     *
     * @param \DateTime $dateDecesPere
     * @return Etudiant
     */
    public function setDateDecesPere($dateDecesPere)
    {
        $this->dateDecesPere = $dateDecesPere;

        return $this;
    }

    /**
     * Get dateDecesPere
     *
     * @return \DateTime 
     */
    public function getDateDecesPere()
    {
        return $this->dateDecesPere;
    }

    /**
     * Set nomMere
     *
     * @param string $nomMere
     * @return Etudiant
     */
    public function setNomMere($nomMere)
    {
        $this->nomMere = $nomMere;

        return $this;
    }

    /**
     * Get nomMere
     *
     * @return string 
     */
    public function getNomMere()
    {
        return $this->nomMere;
    }

    /**
     * Set prenomMere
     *
     * @param string $prenomMere
     * @return Etudiant
     */
    public function setPrenomMere($prenomMere)
    {
        $this->prenomMere = $prenomMere;

        return $this;
    }

    /**
     * Get prenomMere
     *
     * @return string 
     */
    public function getPrenomMere()
    {
        return $this->prenomMere;
    }

    /**
     * Set cinMere
     *
     * @param string $cinMere
     * @return Etudiant
     */
    public function setCinMere($cinMere)
    {
        $this->cinMere = $cinMere;

        return $this;
    }

    /**
     * Get cinMere
     *
     * @return string 
     */
    public function getCinMere()
    {
        return $this->cinMere;
    }

    /**
     * Set naissanceMere
     *
     * @param \DateTime $naissanceMere
     * @return Etudiant
     */
    public function setNaissanceMere($naissanceMere)
    {
        $this->naissanceMere = $naissanceMere;

        return $this;
    }

    /**
     * Get naissanceMere
     *
     * @return \DateTime 
     */
    public function getNaissanceMere()
    {
        return $this->naissanceMere;
    }

    /**
     * Set dateDecesMere
     *
     * @param \DateTime $dateDecesMere
     * @return Etudiant
     */
    public function setDateDecesMere($dateDecesMere)
    {
        $this->dateDecesMere = $dateDecesMere;

        return $this;
    }

    /**
     * Get dateDecesMere
     *
     * @return \DateTime 
     */
    public function getDateDecesMere()
    {
        return $this->dateDecesMere;
    }

    /**
     * Set cinConjoint
     *
     * @param string $cinConjoint
     * @return Etudiant
     */
    public function setCinConjoint($cinConjoint)
    {
        $this->cinConjoint = $cinConjoint;

        return $this;
    }

    /**
     * Get cinConjoint
     *
     * @return string 
     */
    public function getCinConjoint()
    {
        return $this->cinConjoint;
    }

    /**
     * Set dateMariage
     *
     * @param \DateTime $dateMariage
     * @return Etudiant
     */
    public function setDateMariage($dateMariage)
    {
        $this->dateMariage = $dateMariage;

        return $this;
    }

    /**
     * Get dateMariage
     *
     * @return \DateTime 
     */
    public function getDateMariage()
    {
        return $this->dateMariage;
    }

    /**
     * Set dateDivorce
     *
     * @param \DateTime $dateDivorce
     * @return Etudiant
     */
    public function setDateDivorce($dateDivorce)
    {
        $this->dateDivorce = $dateDivorce;

        return $this;
    }

    /**
     * Get dateDivorce
     *
     * @return \DateTime 
     */
    public function getDateDivorce()
    {
        return $this->dateDivorce;
    }

    /**
     * Set dateDeces
     *
     * @param \DateTime $dateDeces
     * @return Etudiant
     */
    public function setDateDeces($dateDeces)
    {
        $this->dateDeces = $dateDeces;

        return $this;
    }

    /**
     * Get dateDeces
     *
     * @return \DateTime 
     */
    public function getDateDeces()
    {
        return $this->dateDeces;
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
     * @return Etudiant
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
