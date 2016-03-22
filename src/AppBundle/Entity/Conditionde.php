<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * conditionde
 *
 * @ORM\Table(name="conditionde")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ConditiondeRepository")
 */
class conditionde
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
     * @ORM\Column(name="valMin", type="string", length=255, nullable=true)
     */
    private $valMin;

    /**
     * @var string
     *
     * @ORM\Column(name="valMax", type="string", length=255, nullable=true)
     */
    private $valMax;

    /**
     * @var int
     *
     * @ORM\Column(name="toQuest", type="integer", nullable=true)
     */
    private $toQuest;


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
     * Set valMin
     *
     * @param string $valMin
     * @return conditionde
     */
    public function setValMin($valMin)
    {
        $this->valMin = $valMin;

        return $this;
    }

    /**
     * Get valMin
     *
     * @return string 
     */
    public function getValMin()
    {
        return $this->valMin;
    }

    /**
     * Set valMax
     *
     * @param string $valMax
     * @return conditionde
     */
    public function setValMax($valMax)
    {
        $this->valMax = $valMax;

        return $this;
    }

    /**
     * Get valMax
     *
     * @return string 
     */
    public function getValMax()
    {
        return $this->valMax;
    }

    /**
     * Set toQuest
     *
     * @param integer $toQuest
     * @return conditionde
     */
    public function setToQuest($toQuest)
    {
        $this->toQuest = $toQuest;

        return $this;
    }

    /**
     * Get toQuest
     *
     * @return integer 
     */
    public function getToQuest()
    {
        return $this->toQuest;
    }
}
