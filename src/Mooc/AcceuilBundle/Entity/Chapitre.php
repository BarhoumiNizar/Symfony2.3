<?php

namespace Mooc\AcceuilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chapitre
 *
 * @ORM\Table(name="chapitre", indexes={@ORM\Index(name="id_cours", columns={"idCours"})})
 * @ORM\Entity
 */
class Chapitre
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_chapitre", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idChapitre;

    /**
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=200, nullable=false)
     */
    private $video;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="text", nullable=false)
     */
    private $presentation;

    /**
     * @var string
     *
     * @ORM\Column(name="objectif", type="text", nullable=false)
     */
    private $objectif;

    /**
     * @var integer
     *
     * @ORM\Column(name="Numero", type="integer", nullable=false)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_chapitre", type="string", length=30, nullable=false)
     */
    private $nomChapitre;

    /**
     * @var \Cours
     *
     * @ORM\ManyToOne(targetEntity="Cours")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCours", referencedColumnName="id_cours")
     * })
     */
    private $idcours;


}
