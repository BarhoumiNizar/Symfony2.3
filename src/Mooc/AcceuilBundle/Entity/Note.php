<?php

namespace Mooc\AcceuilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table(name="note", indexes={@ORM\Index(name="idPersonne", columns={"idPersonne", "certification"}), @ORM\Index(name="certification", columns={"certification"}), @ORM\Index(name="idQuiz", columns={"idQuiz"}), @ORM\Index(name="idPersonne_2", columns={"idPersonne"})})
 * @ORM\Entity
 */
class Note
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var float
     *
     * @ORM\Column(name="score", type="float", precision=10, scale=0, nullable=false)
     */
    private $score;

    /**
     * @var \Quiz
     *
     * @ORM\ManyToOne(targetEntity="Quiz")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idQuiz", referencedColumnName="id_quiz")
     * })
     */
    private $idquiz;

    /**
     * @var \Certification
     *
     * @ORM\ManyToOne(targetEntity="Certification")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="certification", referencedColumnName="id_certification")
     * })
     */
    private $certification;

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
