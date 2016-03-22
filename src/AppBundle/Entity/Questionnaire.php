<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Questionnaire
 *
 * @ORM\Table(name="questionnaire")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuestionnaireRepository")
 */
class Questionnaire
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
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="welcomeMessage", type="text", nullable=true)
     */
    private $welcomeMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="attachement", type="string", length=255, nullable=true)
     */
    private $attachement;

    /**
     * @var bool
     *
     * @ORM\Column(name="isGenerated", type="boolean", nullable=true)
     */
    private $isGenerated;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=5, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="confirmationSms", type="text", nullable=true)
     */
    private $confirmationSms;

    /**
     * @var string
     *
     * @ORM\Column(name="finalMessage", type="text", nullable=true)
     */
    private $finalMessage;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=200, nullable=true)
     */
    private $name;


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
     * Set description
     *
     * @param string $description
     * @return Questionnaire
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set welcomeMessage
     *
     * @param string $welcomeMessage
     * @return Questionnaire
     */
    public function setWelcomeMessage($welcomeMessage)
    {
        $this->welcomeMessage = $welcomeMessage;

        return $this;
    }

    /**
     * Get welcomeMessage
     *
     * @return string 
     */
    public function getWelcomeMessage()
    {
        return $this->welcomeMessage;
    }

    /**
     * Set attachement
     *
     * @param string $attachement
     * @return Questionnaire
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
     * Set isGenerated
     *
     * @param boolean $isGenerated
     * @return Questionnaire
     */
    public function setIsGenerated($isGenerated)
    {
        $this->isGenerated = $isGenerated;

        return $this;
    }

    /**
     * Get isGenerated
     *
     * @return boolean 
     */
    public function getIsGenerated()
    {
        return $this->isGenerated;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Questionnaire
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set confirmationSms
     *
     * @param string $confirmationSms
     * @return Questionnaire
     */
    public function setConfirmationSms($confirmationSms)
    {
        $this->confirmationSms = $confirmationSms;

        return $this;
    }

    /**
     * Get confirmationSms
     *
     * @return string 
     */
    public function getConfirmationSms()
    {
        return $this->confirmationSms;
    }

    /**
     * Set finalMessage
     *
     * @param string $finalMessage
     * @return Questionnaire
     */
    public function setFinalMessage($finalMessage)
    {
        $this->finalMessage = $finalMessage;

        return $this;
    }

    /**
     * Get finalMessage
     *
     * @return string 
     */
    public function getFinalMessage()
    {
        return $this->finalMessage;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Questionnaire
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }
}
