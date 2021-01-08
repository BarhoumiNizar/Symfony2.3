<?php

namespace Mooc\AcceuilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objectif
 *
 * @ORM\Table(name="objectif", indexes={@ORM\Index(name="id_cours", columns={"idCours"})})
 * @ORM\Entity
 */
class Objectif
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_objectif", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idObjectif;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=200, nullable=false)
     */
    private $contenu;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero", type="integer", nullable=false)
     */
    private $numero;

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
