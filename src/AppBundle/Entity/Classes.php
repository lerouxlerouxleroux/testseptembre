<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\OneToMany;
use Doctrine\ORM\Mapping\JoinColumn;

/**
 * Classes
 *
 * @ORM\Table(name="classes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClassesRepository")
 */
class Classes
{


    // ...
    /**
     * One class has Many students.
     * @OneToMany(targetEntity="StudentClass", mappedBy="student")
     */
    private $students;

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
     * @ORM\Column(name="name", type="string", length=255)
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
     * Set name
     *
     * @param string $name
     *
     * @return Classes
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
     * Set idStudent
     *
     * @param integer $id_class
     *
     * @return Classes
     */
    public function setIdClass($idClass)
    {
        $this->idStudent = $idStudent;

        return $this;
    }

    /**
     * Get idStudent
     *
     * @return integer
     */
    public function getIdStudent()
    {
        return $this->idStudent;
    }
}

