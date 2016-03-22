<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table(name="question")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuestionRepository")
 */
class Question
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="questionText", type="string", length=100, nullable=true)
     */
    private $questionText;

    /**
     * @var string
     *
     * @ORM\Column(name="questionTextEn", type="string", length=100, nullable=true)
     */
    private $questionTextEn;

    /**
     * @var string
     *
     * @ORM\Column(name="attachement", type="string", length=255, nullable=true)
     */
    private $attachement;

    /**
     * @var int
     *
     * @ORM\Column(name="responseType", type="smallint", nullable=true)
     */
    private $responseType;

    /**
     * @var int
     *
     * @ORM\Column(name="postion", type="integer")
     */
    private $postion;

    /**
     * @var int
     *
     * @ORM\Column(name="mode", type="smallint", nullable=true)
     */
    private $mode;

    /**
     * @ORM\ManyToOne(targetEntity="Questionnaire", inversedBy="questions")
     * @ORM\JoinColumn(name="questionnaire_id", referencedColumnName="id", nullable=true)
     *
     * @var Questionnaire $questionnaire
     */
    private $questionnaire;

    /**
     * @ORM\OneToMany(targetEntity="Reponse"  , mappedBy="question")
     * @ORM\JoinColumn(name="reponses", referencedColumnName="id", nullable=true)
     *
     * @var ArrayCollection $reponses
     */
    private $reponses;

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
     * Set questionText
     *
     * @param string $questionText
     * @return Question
     */
    public function setQuestionText($questionText)
    {
        $this->questionText = $questionText;

        return $this;
    }

    /**
     * Get questionText
     *
     * @return string 
     */
    public function getQuestionText()
    {
        return $this->questionText;
    }

    /**
     * Set questionTextEn
     *
     * @param string $questionTextEn
     * @return Question
     */
    public function setQuestionTextEn($questionTextEn)
    {
        $this->questionTextEn = $questionTextEn;

        return $this;
    }

    /**
     * Get questionTextEn
     *
     * @return string 
     */
    public function getQuestionTextEn()
    {
        return $this->questionTextEn;
    }

    /**
     * Set attachement
     *
     * @param string $attachement
     * @return Question
     */
    public function setAttachement($attachement)
    {
        $this->attachement = $attachement;

        return $this;
    }

    /**
     * Get attachement
     *
     * @return string 
     */
    public function getAttachement()
    {
        return $this->attachement;
    }

    /**
     * Set responseType
     *
     * @param integer $responseType
     * @return Question
     */
    public function setResponseType($responseType)
    {
        $this->responseType = $responseType;

        return $this;
    }

    /**
     * Get responseType
     *
     * @return integer 
     */
    public function getResponseType()
    {
        return $this->responseType;
    }

    /**
     * Set postion
     *
     * @param integer $postion
     * @return Question
     */
    public function setPostion($postion)
    {
        $this->postion = $postion;

        return $this;
    }

    /**
     * Get postion
     *
     * @return integer 
     */
    public function getPostion()
    {
        return $this->postion;
    }

    /**
     * Set mode
     *
     * @param integer $mode
     * @return Question
     */
    public function setMode($mode)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Get mode
     *
     * @return integer 
     */
    public function getMode()
    {
        return $this->mode;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reponses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set questionnaire
     *
     * @param \AppBundle\Entity\Questionnaire $questionnaire
     * @return Question
     */
    public function setQuestionnaire(\AppBundle\Entity\Questionnaire $questionnaire = null)
    {
        $this->questionnaire = $questionnaire;

        return $this;
    }

    /**
     * Get questionnaire
     *
     * @return \AppBundle\Entity\Questionnaire 
     */
    public function getQuestionnaire()
    {
        return $this->questionnaire;
    }

    /**
     * Add reponses
     *
     * @param \AppBundle\Entity\Reponse $reponses
     * @return Question
     */
    public function addReponse(\AppBundle\Entity\Reponse $reponses)
    {
        $this->reponses[] = $reponses;

        return $this;
    }

    /**
     * Remove reponses
     *
     * @param \AppBundle\Entity\Reponse $reponses
     */
    public function removeReponse(\AppBundle\Entity\Reponse $reponses)
    {
        $this->reponses->removeElement($reponses);
    }

    /**
     * Get reponses
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getReponses()
    {
        return $this->reponses;
    }
}
