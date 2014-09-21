<?php

namespace LinCC\TablesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * VarList
 *
 * @ORM\Table(name="varList")
 * @ORM\Entity
 */
class VarList
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
     * @ORM\Column(name="tagName", type="string", length=50)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="tagType", type="smallint")
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="PLCConnection")
     * @ORM\JoinColumn(name="tagPLCNo", referencedColumnName="id")
     */
    private $PLC;

    /**
     * @var integer
     *
     * @ORM\Column(name="tagAccess", type="smallint")
     */
    private $access;

    /**
     * @var integer
     *
     * @ORM\Column(name="tagDB", type="smallint")
     */
    private $db;

    /**
     * @var integer
     *
     * @ORM\Column(name="tagBYTE", type="integer")
     */
    private $byte;

    /**
     * @var integer
     *
     * @ORM\Column(name="tagBIT", type="smallint")
     */
    private $bit;

    /**
     * @var float
     *
     * @ORM\Column(name="rValue", type="float", nullable=TRUE)
     */
    private $rValue = NULL;

    /**
     * @var float
     *
     * @ORM\Column(name="wValue", type="float", nullable=TRUE)
     */
    private $wValue = NULL;

    /**
     * @var integer
     *
     * @ORM\Column(name="wFlag", type="smallint", nullable=TRUE)
     */
    private $wFlag = NULL;

    /**
     * @var string
     *
     * @ORM\Column(name="tagComment", type="string", length=100)
     */
    private $comment;


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
     * Set tagName
     *
     * @param string $tagName
     * @return VarList
     */
    public function setTagName($tagName)
    {
        $this->tagName = $tagName;
    
        return $this;
    }

    /**
     * Get tagName
     *
     * @return string 
     */
    public function getTagName()
    {
        return $this->tagName;
    }

    /**
     * Set tagType
     *
     * @param integer $tagType
     * @return VarList
     */
    public function setTagType($tagType)
    {
        $this->tagType = $tagType;
    
        return $this;
    }

    /**
     * Get tagType
     *
     * @return integer 
     */
    public function getTagType()
    {
        return $this->tagType;
    }

    /**
     * Set tagPLC
     *
     * @param integer $tagPLC
     * @return VarList
     */
    public function setTagPLC($tagPLC)
    {
        $this->tagPLC = $tagPLC;
    
        return $this;
    }

    /**
     * Get tagPLC
     *
     * @return integer 
     */
    public function getTagPLC()
    {
        return $this->tagPLC;
    }

    /**
     * Set access
     *
     * @param integer $access
     * @return VarList
     */
    public function setAccess($access)
    {
        $this->access = $access;
    
        return $this;
    }

    /**
     * Get access
     *
     * @return integer 
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * Set db
     *
     * @param integer $db
     * @return VarList
     */
    public function setDb($db)
    {
        $this->db = $db;
    
        return $this;
    }

    /**
     * Get db
     *
     * @return integer 
     */
    public function getDb()
    {
        return $this->db;
    }

    /**
     * Set byte
     *
     * @param integer $byte
     * @return VarList
     */
    public function setByte($byte)
    {
        $this->byte = $byte;
    
        return $this;
    }

    /**
     * Get byte
     *
     * @return integer 
     */
    public function getByte()
    {
        return $this->byte;
    }

    /**
     * Set bit
     *
     * @param integer $bit
     * @return VarList
     */
    public function setBit($bit)
    {
        $this->bit = $bit;
    
        return $this;
    }

    /**
     * Get bit
     *
     * @return integer 
     */
    public function getBit()
    {
        return $this->bit;
    }

    /**
     * Set rValue
     *
     * @param float $rValue
     * @return VarList
     */
    public function setRValue($rValue)
    {
        $this->rValue = $rValue;
    
        return $this;
    }

    /**
     * Get rValue
     *
     * @return float 
     */
    public function getRValue()
    {
        return $this->rValue;
    }

    /**
     * Set wValue
     *
     * @param float $wValue
     * @return VarList
     */
    public function setWValue($wValue)
    {
        $this->wValue = $wValue;
    
        return $this;
    }

    /**
     * Get wValue
     *
     * @return float 
     */
    public function getWValue()
    {
        return $this->wValue;
    }

    /**
     * Set wFlag
     *
     * @param integer $wFlag
     * @return VarList
     */
    public function setWFlag($wFlag)
    {
        $this->wFlag = $wFlag;
    
        return $this;
    }

    /**
     * Get wFlag
     *
     * @return integer 
     */
    public function getWFlag()
    {
        return $this->wFlag;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return VarList
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
}
