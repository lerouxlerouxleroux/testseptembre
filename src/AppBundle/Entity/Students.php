<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Students
 *
 * @ORM\Table(name="students")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StudentsRepository")
 */
class Students
{

    // ...
    /**
     * One student has Many classes subscriptions.
     * @OneToMany(targetEntity="StudentClass", mappedBy="class")
     */
    private $classes;

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
     * @ORM\Column(name="first_name", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=255)
     */
    private $lastName;


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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Students
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Students
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set idClass
     *
     * @param integer $id_class
     *
     * @return Students
     */
    public function setIdClass($idClass)
    {
        $this->idClass = $idClass;

        return $this;
    }

    /**
     * Get idClass
     *
     * @return integer
     */
    public function getIdClass()
    {
        return $this->idClass;
    }

}

