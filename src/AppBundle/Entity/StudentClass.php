<?php

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\ManytoOne AS ManyToOne;
use Doctrine\ORM\Mapping\JoinColumn AS JoinColumn;

/**
 * StudentClass
 *
 * @ORM\Table(name="student_class")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StudentClassRepository")
 */
class StudentClass
{

    /**
     * Many Line have one referral
     * @ORM\ManyToOne(targetEntity="Students", inversedBy="class", cascade={"persist"})
     * @ORM\JoinColumn(name="id_student", referencedColumnName="id")
     */
    private $student;

    /**
     * Many Line have one referral
     * @ORM\ManyToOne(targetEntity="Classes", inversedBy="student", cascade={"persist"})
     * @ORM\JoinColumn(name="id_class", referencedColumnName="id")
     */
    private $class;


    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_student", type="integer")
     */
    private $idStudent;

    /**
     * @var int
     *
     * @ORM\Column(name="id_class", type="integer")
     */
    private $idClass;

    /**
     * @var float
     *
     * @ORM\Column(name="note", type="float")
     */
    private $note;

    /**
     * @var datetime
     *
     * @ORM\Column(name="date_registration", type="datetime")
     */
    private $datetime;


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
     * Set idStudent
     *
     * @param integer $idStudent
     *
     * @return StudentClass
     */
    public function setIdStudent($idStudent)
    {
        $this->idStudent = $idStudent;

        return $this;
    }

    /**
     * Get idStudent
     *
     * @return int
     */
    public function getIdStudent()
    {
        return $this->idStudent;
    }

    /**
     * Set idClass
     *
     * @param integer $idClass
     *
     * @return StudentClass
     */
    public function setIdClass($idClass)
    {
        $this->idClass = $idClass;

        return $this;
    }

    /**
     * Get idClass
     *
     * @return int
     */
    public function getIdClass()
    {
        return $this->idClass;
    }

    /**
     * Set note
     *
     * @param float $note
     *
     * @return StudentClass
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return float
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set registration date
     *
     * @param string $datetime
     *
     * @return StudentClass
     */
    public function setDateRegistration($date_registration)
    {
        $this->date_registration = $date_registration;

        return $this;
    }

    /**
     * Get registration date
     *
     * @return float
     */
    public function getDateRegistration()
    {
        return $this->date_registration;
    }

}

