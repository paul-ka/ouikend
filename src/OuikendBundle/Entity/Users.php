<?php

namespace OuikendBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * Users
 */
class Users extends BaseUser
{
    /**
     * @var int
     */
    protected $id;


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

