<?php

namespace OSE\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 */
class User extends BaseUser
{

    public function __construct() 
    {
        parent::__construct();
    }
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $entries;


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
     * Add entries
     *
     * @param \OSE\TimeClockBundle\Entity\Entry $entries
     * @return User
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