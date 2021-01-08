<?php

namespace Mooc\AcceuilBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * Personne
 *
 * @ORM\Table(name="personne")
 * @ORM\Entity
 */
class Personne extends BaseUser
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=30, nullable=false)
     */
    private $nom;

   

   

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=300, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="cv", type="string", length=1000, nullable=true)
     */
    private $cv;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=30, nullable=true)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="document", type="string", length=1000, nullable=true)
     */
    private $document;

    /**
     * @var string
     *
     * @ORM\Column(name="domaine", type="string", length=30, nullable=true)
     */
    private $domaine;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date", nullable=true)
     */
    private $datenaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="niveau", type="string", length=30, nullable=true)
     */
    private $niveau;

    /**
     * @var string
     *
     * @ORM\Column(name="experience", type="string", length=300, nullable=true)
     */
    private $experience;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=30, nullable=false)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=30, nullable=true)
     */
    private $statut;

    /**
     * @var string
     *
     * @ORM\Column(name="specialite", type="string", length=300, nullable=true)
     */
    private $specialite;

    /**
     * @var integer
     *
     * @ORM\Column(name="telephone", type="integer", nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=300, nullable=true)
     */
    private $adresse;
    
    /**
    * @Assert\File(
    *     maxSize = "1024k",
    *     mimeTypes = {"application/pdf", "application/x-pdf"},
    *     mimeTypesMessage = "Please upload a valid PDF"
    * )
    */
   private $file;


   public function __construct()
    {
        parent::__construct();
    }

    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getImage() {
        return $this->image;
    }

    function getCv() {
        return $this->cv;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getDocument() {
        return $this->document;
    }

    function getDomaine() {
        return $this->domaine;
    }

    function getDatenaissance() {
        return $this->datenaissance;
    }

    function getNiveau() {
        return $this->niveau;
    }

    function getExperience() {
        return $this->experience;
    }

    function getType() {
        return $this->type;
    }

    function getStatut() {
        return $this->statut;
    }

    function getSpecialite() {
        return $this->specialite;
    }

    function getTelephone() {
        return $this->telephone;
    }

    function getAdresse() {
        return $this->adresse;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setImage($image) {
        $this->image = $image;
    }

    function setCv($cv) {
        $this->cv = $cv;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setDocument($document) {
        $this->document = $document;
    }

    function setDomaine($domaine) {
        $this->domaine = $domaine;
    }

    function setDatenaissance(\DateTime $datenaissance) {
        $this->datenaissance = $datenaissance;
    }

    function setNiveau($niveau) {
        $this->niveau = $niveau;
    }

    function setExperience($experience) {
        $this->experience = $experience;
    }

    function setType($type) {
        $this->type = $type;
    }

    function setStatut($statut) {
        $this->statut = $statut;
    }

    function setSpecialite($specialite) {
        $this->specialite = $specialite;
    }

    function setTelephone($telephone) {
        $this->telephone = $telephone;
    }

    function setAdresse($adresse) {
        $this->adresse = $adresse;
    }



}
