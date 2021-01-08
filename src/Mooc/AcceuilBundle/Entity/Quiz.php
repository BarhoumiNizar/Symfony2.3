<?php

namespace Mooc\AcceuilBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quiz
 *
 * @ORM\Table(name="quiz", uniqueConstraints={@ORM\UniqueConstraint(name="id_chapitre", columns={"idChapitre"})})
 * @ORM\Entity
 */
class Quiz
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_quiz", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idQuiz;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_quiz", type="integer", nullable=false)
     */
    private $typeQuiz;

    /**
     * @var \Chapitre
     *
     * @ORM\ManyToOne(targetEntity="Chapitre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idChapitre", referencedColumnName="id_chapitre")
     * })
     */
    private $idchapitre;


}
