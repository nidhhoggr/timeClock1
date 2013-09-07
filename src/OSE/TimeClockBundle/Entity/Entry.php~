<?php

namespace OSE\TimeClockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entry
 */
class Entry
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $fosUserId;

    /**
     * @var \DateTime
     */
    private $time;

    /**
     * @var string
     */
    private $details;


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
     * Set fosUserId
     *
     * @param integer $fosUserId
     * @return Entry
     */
    public function setFosUserId($fosUserId)
    {
        $this->fosUserId = $fosUserId;
    
        return $this;
    }

    /**
     * Get fosUserId
     *
     * @return integer 
     */
    public function getFosUserId()
    {
        return $this->fosUserId;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     * @return Entry
     */
    public function setTime($time)
    {
        $this->time = $time;
    
        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime 
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set details
     *
     * @param string $details
     * @return Entry
     */
    public function setDetails($details)
    {
        $this->details = $details;
    
        return $this;
    }

    /**
     * Get details
     *
     * @return string 
     */
    public function getDetails()
    {
        return $this->details;
    }
    /**
     * @var integer
     */
    private $user_id;

    /**
     * @var \OSE\UserBundle\Entity\User
     */
    private $user;


    /**
     * Set user_id
     *
     * @param integer $userId
     * @return Entry
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;
    
        return $this;
    }

    /**
     * Get user_id
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Set user
     *
     * @param \OSE\UserBundle\Entity\User $user
     * @return Entry
     */
    public function setUser(\OSE\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \OSE\UserBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * @var \OSE\UserBundle\Entity\User
     */
    private $users;

    /**
     * @var \OSE\TimeClockBundle\Entity\EntryType
     */
    private $entry_type;


    /**
     * Set users
     *
     * @param \OSE\UserBundle\Entity\User $users
     * @return Entry
     */
    public function setUsers(\OSE\UserBundle\Entity\User $users = null)
    {
        $this->users = $users;
    
        return $this;
    }

    /**
     * Get users
     *
     * @return \OSE\UserBundle\Entity\User 
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set entry_type
     *
     * @param \OSE\TimeClockBundle\Entity\EntryType $entryType
     * @return Entry
     */
    public function setEntryType(\OSE\TimeClockBundle\Entity\EntryType $entryType = null)
    {
        $this->entry_type = $entryType;
    
        return $this;
    }

    /**
     * Get entry_type
     *
     * @return \OSE\TimeClockBundle\Entity\EntryType 
     */
    public function getEntryType()
    {
        return $this->entry_type;
    }
}