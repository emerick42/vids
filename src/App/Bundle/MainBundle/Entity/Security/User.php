<?php

namespace App\Bundle\MainBundle\Entity\Security;

use Doctrine\ORM\Mapping as ORM;

/**
 * The security user
 *
 * @ORM\Entity(repositoryClass="App\Bundle\MainBundle\Entity\Security\UserRepository")
 * @ORM\Table(name="security_user")
 */
class User
{
    /**
     * The unique identifier
     *
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $identifier;

    /**
     * The unique username
     *
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, unique=true)
     */
    private $username;

    /**
     * The encoded password of this user
     *
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * Get identifier
     *
     * @return int
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }
}
