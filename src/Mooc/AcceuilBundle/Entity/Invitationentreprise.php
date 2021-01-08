<?php

namespace Mooc\AcceuilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invitationentreprise
 *
 * @ORM\Table(name="invitationentreprise")
 * @ORM\Entity
 */
class Invitationentreprise
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_invitationEntreprise", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idInvitationentreprise;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_entrepriseConnecte", type="integer", nullable=false)
     */
    private $idEntrepriseconnecte;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_formateur", type="integer", nullable=false)
     */
    private $idFormateur;

    /**
     * @var string
     *
     * @ORM\Column(name="valider", type="string", length=20, nullable=false)
     */
    private $valider;


}
