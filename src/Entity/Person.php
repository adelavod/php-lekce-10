<?php
namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonRepository")
 */
class Person
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=255)
     *
     */
    private $name;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Choice({"neuvádět", "male", "female"})
     */
    private $sex;
    /**
     * @ORM\Column(type="integer")
     */
    private $age;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @ORM\ManyToOne(targetEntity="App\Entity\Person", inversedBy="name")
     */
    private $mother;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @ORM\ManyToOne(targetEntity="App\Entity\Person", inversedBy="name",)
     */
    private $father;
    public function getMother(): ?Person
    {
        return $this->mother;
    }
    public function setMother(string $mother): self
    {
        $this->mother = $mother;
        return $this;
    }
    public function getFather(): ?Person
    {
        return $this->father;
    }
    public function setFather(string $father): self
    {
        $this->father = $father;
        return $this;
    }
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    public function getSex(): ?string
    {
        return $this->sex;
    }
    public function setSex(string $sex): self
    {
        $this->sex = $sex;
        return $this;
    }
    public function getAge(): ?int
    {
        return $this->age;
    }
    public function setAge(int $age): self
    {
        $this->age = $age;
        return $this;
    }
}