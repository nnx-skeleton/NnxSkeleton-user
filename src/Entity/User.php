<?php
/**
 * Created by PhpStorm.
 * User: dmitry
 * Date: 27.04.16
 * Time: 14:09
 */
namespace NnxMember\User\Entity;

use Doctrine\ORM\Mapping as ORM;
//use Nnx\Doctrine\Annotation\DiscriminatorEntry;

/**
 * Class User
 * @package NnxMember\User\Entity
 *
 * @ORM\Entity()
 * @ORM\Table(name="users")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="type", type="string")
 * @ORM\DiscriminatorMap(value={ "user" = "User" })
 */
class User implements UserInterface
{

    /**
     * @var int
     *
     * @ORM\Id()
     * @ORM\Column(name="id", type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @return int
     */

    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = (int)$id;
        return $this;
    }
}
