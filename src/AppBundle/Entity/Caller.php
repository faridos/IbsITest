<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Caller
 *
 * @ORM\Table(name="caller")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CallerRepository")
 */
class Caller
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
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="adress", type="string", length=255, nullable=true)
     */
    private $adress;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=50, nullable=true)
     */
    private $mail;

    /**
     * @ORM\OneToMany(targetEntity="Calll"  , mappedBy="caller")
     * @ORM\JoinColumn(name="calls", referencedColumnName="id", nullable=true)
     *
     * @var ArrayCollection $calls
     */
    private $calls;

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
     * Set name
     *
     * @param string $name
     * @return Caller
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

    /**
     * Set adress
     *
     * @param string $adress
     * @return Caller
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string 
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Caller
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->calls = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add calls
     *
     * @param \AppBundle\Entity\Calll $calls
     * @return Caller
     */
    public function addCall(\AppBundle\Entity\Calll $calls)
    {
        $this->calls[] = $calls;

        return $this;
    }

    /**
     * Remove calls
     *
     * @param \AppBundle\Entity\Calll $calls
     */
    public function removeCall(\AppBundle\Entity\Calll $calls)
    {
        $this->calls->removeElement($calls);
    }

    /**
     * Get calls
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCalls()
    {
        return $this->calls;
    }
}
