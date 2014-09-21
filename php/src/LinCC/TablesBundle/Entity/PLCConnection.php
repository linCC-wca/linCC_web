<?php

namespace LinCC\TablesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PLCConnection
 *
 * @ORM\Table(name="PLCConnections")
 * @ORM\Entity
 */
class PLCConnection
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="PLCName", type="string", length=10)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="PLCType")
     * @ORM\JoinColumn(name="PLCType", referencedColumnName="id")
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="PLCRack", type="smallint")
     */
    private $rack;

    /**
     * @var integer
     *
     * @ORM\Column(name="PLCSlot", type="smallint")
     */
    private $slot;

    /**
     * @var string
     *
     * @ORM\Column(name="PLCIp", type="string", length=20)
     */
    private $ip;

    /**
     * @var integer
     *
     * @ORM\Column(name="PLCConnPort", type="smallint")
     */
    private $connPort;

    /**
     * @var string
     *
     * @ORM\Column(name="PLCDesc", type="string", length=100, nullable=TRUE)
     */
    private $description = NULL;


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
     * @return PLCConnection
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
     * Set type
     *
     * @param integer $type
     * @return PLCConnection
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set rack
     *
     * @param integer $rack
     * @return PLCConnection
     */
    public function setRack($rack)
    {
        $this->rack = $rack;
    
        return $this;
    }

    /**
     * Get rack
     *
     * @return integer 
     */
    public function getRack()
    {
        return $this->rack;
    }

    /**
     * Set slot
     *
     * @param integer $slot
     * @return PLCConnection
     */
    public function setSlot($slot)
    {
        $this->slot = $slot;
    
        return $this;
    }

    /**
     * Get slot
     *
     * @return integer 
     */
    public function getSlot()
    {
        return $this->slot;
    }

    /**
     * Set ip
     *
     * @param string $ip
     * @return PLCConnection
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    
        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set connPort
     *
     * @param integer $connPort
     * @return PLCConnection
     */
    public function setConnPort($connPort)
    {
        $this->connPort = $connPort;
    
        return $this;
    }

    /**
     * Get connPort
     *
     * @return integer 
     */
    public function getConnPort()
    {
        return $this->connPort;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return PLCConnection
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
}
