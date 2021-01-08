<?php

namespace Mooc\AcceuilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Certification
 *
 * @ORM\Table(name="certification", indexes={@ORM\Index(name="id_module", columns={"idModule", "idPersonne"}), @ORM\Index(name="idPersonne", columns={"idPersonne"}), @ORM\Index(name="IDX_6C3C6D756F358EB2", columns={"idModule"})})
 * @ORM\Entity
 */
class Certification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_certification", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCertification;

    /**
     * @var string
     *
     * @ORM\Column(name="document", type="string", length=200, nullable=false)
     */
    private $document;

    /**
     * @var \Module
     *
     * @ORM\ManyToOne(targetEntity="Module")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idModule", referencedColumnName="id_module")
     * })
     */
    private $idmodule;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPersonne", referencedColumnName="id")
     * })
     */
    private $idpersonne;


}
