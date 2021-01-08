<?php

namespace Mooc\AcceuilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invitationformateur
 *
 * @ORM\Table(name="invitationformateur")
 * @ORM\Entity
 */
class Invitationformateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_invitationFormateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idInvitationformateur;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_formateurConnecte", type="integer", nullable=false)
     */
    private $idFormateurconnecte;

    /**
  
     * @ORM\Column(name="id_Entreprise", type="string", length=20, nullable=false)
     */
    private $idEntreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="valider", type="string", length=20, nullable=false)
     */
    private $valider;



    /**
     * Get idInvitationformateur
     *
     * @return integer 
     */
    public function getIdInvitationformateur()
    {
        return $this->idInvitationformateur;
    }

    /**
     * Set idFormateurconnecte
     *
     * @param integer $idFormateurconnecte
     * @return Invitationformateur
     */
    public function setIdFormateurconnecte($idFormateurconnecte)
    {
        $this->idFormateurconnecte = $idFormateurconnecte;

        return $this;
    }

    /**
     * Get idFormateurconnecte
     *
     * @return integer 
     */
    public function getIdFormateurconnecte()
    {
        return $this->idFormateurconnecte;
    }

    

    /**
     * Set valider
     *
     * @param string $valider
     * @return Invitationformateur
     */
    public function setValider($valider)
    {
        $this->valider = $valider;

        return $this;
    }

    /**
     * Get valider
     *
     * @return string 
     */
    public function getValider()
    {
        return $this->valider;
    }

    /**
     * Set idEntreprise
     *
     * @param string $idEntreprise
     * @return Invitationformateur
     */
    public function setIdEntreprise($idEntreprise)
    {
        $this->idEntreprise = $idEntreprise;

        return $this;
    }

    /**
     * Get idEntreprise
     *
     * @return string 
     */
    public function getIdEntreprise()
    {
        return $this->idEntreprise;
    }
}
