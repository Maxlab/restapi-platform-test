<?php

namespace AppBundle\Entity;

use ApiPlatform\Core\Annotation\ApiProperty;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * ApiUser
 * @ApiResource()
 * @ORM\Table(name="api_user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ApiUserRepository")
 */
class ApiUser
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
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ApiGroup")
     * @ORM\JoinColumn(referencedColumnName="id")
     */
    private $group;

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
     * Set username
     *
     * @param string $username
     *
     * @return ApiUser
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
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
     * Set group
     *
     * @param \AppBundle\Entity\ApiGroup $group
     *
     * @return ApiUser
     */
    public function setGroup(\AppBundle\Entity\ApiGroup $group = null)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \AppBundle\Entity\ApiGroup
     */
    public function getGroup()
    {
        return $this->group;
    }
}
