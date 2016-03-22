<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table(name="reponse")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReponseRepository")
 */
class Reponse
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
     * @ORM\Column(name="content", type="string", length=255, nullable=true)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="attachement", type="string", length=255, nullable=true)
     */
    private $attachement;

    /**
     * @ORM\ManyToOne(targetEntity="Question", inversedBy="reponses")
     * @ORM\JoinColumn(name="question_id", referencedColumnName="id", nullable=true)
     *
     * @var Question $question
     */
    private $question;

    /**
     * @ORM\ManyToOne(targetEntity="Calll", inversedBy="reponses")
     * @ORM\JoinColumn(name="call_id", referencedColumnName="id", nullable=true)
     *
     * @var Calll $question
     */
    private $call;
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
     * Set content
     *
     * @param string $content
     * @return Reponse
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set attachement
     *
     * @param string $attachement
     * @return Reponse
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
     * Set question
     *
     * @param \AppBundle\Entity\Question $question
     * @return Reponse
     */
    public function setQuestion(\AppBundle\Entity\Question $question = null)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \AppBundle\Entity\Question 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set call
     *
     * @param \AppBundle\Entity\Calll $call
     * @return Reponse
     */
    public function setCall(\AppBundle\Entity\Calll $call = null)
    {
        $this->call = $call;

        return $this;
    }

    /**
     * Get call
     *
     * @return \AppBundle\Entity\Calll 
     */
    public function getCall()
    {
        return $this->call;
    }
}
