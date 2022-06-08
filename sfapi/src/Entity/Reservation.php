<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"reservations:read"}},
 *     denormalizationContext={"groups"={"reservations:write"}}
 * )
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     * @Groups({"reservations:read","reservations:write","boats:read"})
     * @Assert\NotBlank()
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"reservations:read","reservations:write","boats:read"})
     * @Assert\NotBlank()
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"reservations:read","reservations:write","boats:read"})
     * @Assert\NotBlank()
     */
    private $lastName;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"reservations:read","reservations:write","boats:read"})
     * @Assert\NotBlank()
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"reservations:read","reservations:write","boats:read"})
     */
    private $phone;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"reservations:read","reservations:write","boats:read"})
     * @Assert\NotBlank()
     */
    private $nbPerson;

    /**
     * @ORM\Column(type="time")
     * @Groups({"reservations:read","reservations:write","boats:read"})
     * @Assert\NotBlank()
     */
    private $startHour;

    /**
     * @ORM\Column(type="time")
     * @Groups({"reservations:read","reservations:write","boats:read"})
     * @Assert\NotBlank()
     */
    private $endHour;

    /**
     * @ORM\ManyToOne(targetEntity=Boat::class, inversedBy="reservations")
     * @ORM\JoinColumn(nullable=false)
     * @Groups({"reservations:read","reservations:write"})
     * @Assert\Valid()
     */
    private $boat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getNbPerson(): ?int
    {
        return $this->nbPerson;
    }

    public function setNbPerson(int $nbPerson): self
    {
        $this->nbPerson = $nbPerson;

        return $this;
    }

    public function getStartHour(): ?\DateTimeInterface
    {
        return $this->startHour;
    }

    public function setStartHour(\DateTimeInterface $startHour): self
    {
        $this->startHour = $startHour;

        return $this;
    }

    public function getEndHour(): ?\DateTimeInterface
    {
        return $this->endHour;
    }

    public function setEndHour(\DateTimeInterface $endHour): self
    {
        $this->endHour = $endHour;

        return $this;
    }

    public function getBoat(): ?Boat
    {
        return $this->boat;
    }

    public function setBoat(?Boat $boat): self
    {
        $this->boat = $boat;

        return $this;
    }
}
