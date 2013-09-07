<?php

namespace OSE\TimeClockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EntryType
 */
class EntryType
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $entryId;

    /**
     * @var boolean
     */
    private $isClockin;

    /**
     * @var string
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
     * Set entryId
     *
     * @param integer $entryId
     * @return EntryType
     */
    public function setEntryId($entryId)
    {
        $this->entryId = $entryId;
    
        return $this;
    }

    /**
     * Get entryId
     *
     * @return integer 
     */
    public function getEntryId()
    {
        return $this->entryId;
    }

    /**
     * Set isClockin
     *
     * @param boolean $isClockin
     * @return EntryType
     */
    public function setIsClockin($isClockin)
    {
        $this->isClockin = $isClockin;
    
        return $this;
    }

    /**
     * Get isClockin
     *
     * @return boolean 
     */
    public function getIsClockin()
    {
        return $this->isClockin;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return EntryType
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $entries;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->entries = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Add entries
     *
     * @param \OSE\TimeClockBundle\Entity\Entry $entries
     * @return EntryType
     */
    public function addEntrie(\OSE\TimeClockBundle\Entity\Entry $entries)
    {
        $this->entries[] = $entries;
    
        return $this;
    }

    /**
     * Remove entries
     *
     * @param \OSE\TimeClockBundle\Entity\Entry $entries
     */
    public function removeEntrie(\OSE\TimeClockBundle\Entity\Entry $entries)
    {
        $this->entries->removeElement($entries);
    }

    /**
     * Get entries
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEntries()
    {
        return $this->entries;
    }
}