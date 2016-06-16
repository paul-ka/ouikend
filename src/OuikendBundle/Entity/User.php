<?php

namespace OuikendBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * Users
 */
class User extends BaseUser
{
    /**
     * @var int
     */
    protected $id;

    private $trips;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

