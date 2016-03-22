<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calll
 *
 * @ORM\Table(name="calll")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CalllRepository")
 */
class Calll
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
     * @var \DateTime
     *
     * @ORM\Column(name="callDate", type="datetime")
     */
    private $callDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="assignementDate", type="datetime", nullable=true)
     */
    private $assignementDate;

    /**
     * @var int
     *
     * @ORM\Column(name="duration", type="integer", nullable=true)
     */
    private $duration;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="CallNumber", type="string", length=255, nullable=true)
     */
    private $callNumber;

    /**
     * @var int
     *
     * @ORM\Column(name="rate", type="integer", nullable=true)
     */
    private $rate;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    private $comment;

    /**
     * @ORM\OneToMany(targetEntity="Reponse"  , mappedBy="call")
     * @ORM\JoinColumn(name="reponses", referencedColumnName="id", nullable=true)
     *
     * @var ArrayCollection $reponses
     */
    private $reponses;

    /**
     * @ORM\ManyToOne(targetEntity="Caller", inversedBy="calls")
     * @ORM\JoinColumn(name="caller_id", referencedColumnName="id", nullable=true)
     *
     * @var Caller $caller
     */
    private $caller;
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
     * Set callDate
     *
     * @param \DateTime $callDate
     * @return Calll
     */
    public function setCallDate($callDate)
    {
        $this->callDate = $callDate;

        return $this;
    }

    /**
     * Get callDate
     *
     * @return \DateTime 
     */
    public function getCallDate()
    {
        return $this->callDate;
    }

    /**
     * Set assignementDate
     *
     * @param \DateTime $assignementDate
     * @return Calll
     */
    public function setAssignementDate($assignementDate)
    {
        $this->assignementDate = $assignementDate;

        return $this;
    }

    /**
     * Get assignementDate
     *
     * @return \DateTime 
     */
    public function getAssignementDate()
    {
        return $this->assignementDate;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     * @return Calll
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer 
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Calll
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set callNumber
     *
     * @param string $callNumber
     * @return Calll
     */
    public function setCallNumber($callNumber)
    {
        $this->callNumber = $callNumber;

        return $this;
    }

    /**
     * Get callNumber
     *
     * @return string 
     */
    public function getCallNumber()
    {
        return $this->callNumber;
    }

    /**
     * Set rate
     *
     * @param integer $rate
     * @return Calll
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return integer 
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return Calll
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string 
     */
    public function getComment()
    {
        return $this->comment;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reponses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add reponses
     *
     * @param \AppBundle\Entity\Reponse $reponses
     * @return Calll
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

    /**
     * Set caller
     *
     * @param \AppBundle\Entity\Caller $caller
     * @return Calll
     */
    public function setCaller(\AppBundle\Entity\Caller $caller = null)
    {
        $this->caller = $caller;

        return $this;
    }

    /**
     * Get caller
     *
     * @return \AppBundle\Entity\Caller 
     */
    public function getCaller()
    {
        return $this->caller;
    }
}
