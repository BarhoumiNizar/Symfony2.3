<?php

namespace Mooc\AcceuilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours", indexes={@ORM\Index(name="id_personne", columns={"idPersonnee"})})
 * @ORM\Entity
 */
class Cours
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_cours", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCours;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_cours", type="string", length=200, nullable=false)
     */
    private $nomCours;

    /**
     * @var string
     *
     * @ORM\Column(name="module", type="string", length=20, nullable=false)
     */
    private $module;

    /**
     * @var string
     *
     * @ORM\Column(name="appreciation", type="string", length=30, nullable=true)
     */
    private $appreciation;

    /**
     * @var string
     *
     * @ORM\Column(name="descriptif", type="text", nullable=false)
     */
    private $descriptif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="periode", type="time", nullable=true)
     */
    private $periode;

    /**
     * @var string
     *
     * @ORM\Column(name="trophee", type="string", length=200, nullable=true)
     */
    private $trophee;

    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=1000, nullable=true)
     */
    private $video;

    /**
     * @var string
     *
     * @ORM\Column(name="Datedebut", type="string", length=30, nullable=false)
     */
    private $datedebut;

    /**
     * @var string
     *
     * @ORM\Column(name="Datefin", type="string", length=30, nullable=false)
     */
    private $datefin;

    /**
     * @var string
     *
     * @ORM\Column(name="Status", type="string", length=30, nullable=false)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="text", nullable=true)
     */
    private $image;

    /**
     * @var \Personne
     *
     * @ORM\ManyToOne(targetEntity="Personne")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPersonnee", referencedColumnName="id")
     * })
     */
    private $idpersonnee;


}
