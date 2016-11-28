<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * ApiGroup
 *
 * @ApiResource()
 * @ORM\Table(name="api_group")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ApiGroupRepository")
 */
class ApiGroup
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
     * @ORM\Column(name="groupname", type="string", length=255)
     */
    private $groupname;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set groupname
     *
     * @param string $groupname
     *
     * @return ApiGroup
     */
    public function setGroupname($groupname)
    {
        $this->groupname = $groupname;

        return $this;
    }

    /**
     * Get groupname
     *
     * @return string
     */
    public function getGroupname()
    {
        return $this->groupname;
    }
}
