<?php

namespace HeticBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Etudiant
 * @author Yann Le Scouarnec <yann.le-scouarnec@hetic.net>
 * @package HeticBundle\Entity
 * @ORM\Table(name="etudiant")
 * @ORM\Entity(repositoryClass="HeticBundle\Repository\EtudiantRepository")
 */
class Etudiant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $firstName;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $lastName;
    /**
     * @ORM\Column(type="date")
     */
    private $dateOfBirth;
    /**
     * @ORM\Column(type="string", length=100)
     */
    private $promotion;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param mixed $dateOfBirth
     * @return $this
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getPromotion()
    {
        return $this->promotion;
    }

    /**
     * @param mixed $promotion
     * @return $this
     */
    public function setPromotion($promotion)
    {
        $this->promotion = $promotion;

        return $this;
    }

}