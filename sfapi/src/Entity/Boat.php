<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\BoatRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\SerializedName;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"boats:read"}},
 *     denormalizationContext={"groups"={"boats:write"}}
 * )
 * @ORM\Entity(repositoryClass=BoatRepository::class)
 */
class Boat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @Groups({"boats:read","boats:write"})
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"boats:read","boats:write","images:read","reservations:read","testimonials:read"})
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @ORM\Column(type="boolean")
     * @Groups({"boats:read","boats:write"})
     * @Assert\NotBlank()
     */
    private $isAvailable;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups({"boats:read","boats:write"})
     */
    private $description;

    /**
     * @ORM\Column(type="text")
     * @Groups({"boats:read"})
     */
    private $history;

    /**
     * @ORM\Column(type="integer")
     * @Groups({"boats:read","boats:write"})
     * @Assert\NotBlank()
     */
    private $nbPersonMax;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"boats:read","boats:write"})
     * @Assert\NotBlank()
     */
    private $openingHours;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"boats:read","boats:write"})
     */
    private $launchYear;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"boats:read","boats:write"})
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"boats:read","boats:write"})
     */
    private $material;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"boats:read","boats:write"})
     */
    private $buyingPrice;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"boats:read","boats:write"})
     */
    private $restoration;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"boats:read","boats:write"})
     */
    private $length;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"boats:read","boats:write"})
     */
    private $maxWidth;

    /**
     * @ORM\Column(type="string", length=255 , nullable=true)
     * @Groups({"boats:read","boats:write"})
     */
    private $maxDraught;

    /**
     * @ORM\OneToMany(targetEntity=Image::class, mappedBy="boat")
     * @Groups({"boats:read","boats:write"})
     */
    private $images;

    /**
     * @ORM\OneToMany(targetEntity=Reservation::class, mappedBy="boat", orphanRemoval=true)
     * @Groups({"boats:read"})
     */
    private $reservations;

    /**
     * @ORM\OneToMany(targetEntity=Testimonial::class, mappedBy="boat")
     * @Groups({"boats:read","boats:write"})
     */
    private $testimonials;

    /**
     * @ORM\Column(type="float")
     * @Groups({"boats:read","boats:write"})
     * @Assert\NotBlank()
     */
    private $lat;

    /**
     * @ORM\Column(type="float")
     * @Groups({"boats:read","boats:write"})
     * @Assert\NotBlank()
     */
    private $lon;

    public function __construct()
    {
        $this->images = new ArrayCollection();
        $this->reservations = new ArrayCollection();
        $this->testimonials = new ArrayCollection();
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

    public function getIsAvailable(): ?bool
    {
        return $this->isAvailable;
    }

    public function setIsAvailable(bool $isAvailable): self
    {
        $this->isAvailable = $isAvailable;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getHistory(): ?string
    {
        return $this->history;
    }

    public function setHistory(string $history): self
    {
        $this->history = $history;

        return $this;
    }

    /**
     * History text html of a Boat
     * @Groups({"boats:write"})
     * @SerializedName("history")
     */
    public function setTextHistory(string $textHistory): self
    {
        $this->history = nl2br($textHistory);
        return $this;
    }

    public function getNbPersonMax(): ?int
    {
        return $this->nbPersonMax;
    }

    public function setNbPersonMax(int $nbPersonMax): self
    {
        $this->nbPersonMax = $nbPersonMax;

        return $this;
    }

    public function getOpeningHours(): ?string
    {
        return $this->openingHours;
    }

    public function setOpeningHours(string $openingHours): self
    {
        $this->openingHours = $openingHours;

        return $this;
    }

    public function getLaunchYear(): ?string
    {
        return $this->launchYear;
    }

    public function setLaunchYear(string $launchYear): self
    {
        $this->launchYear = $launchYear;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getMaterial(): ?string
    {
        return $this->material;
    }

    public function setMaterial(string $material): self
    {
        $this->material = $material;

        return $this;
    }

    public function getBuyingPrice(): ?string
    {
        return $this->buyingPrice;
    }

    public function setBuyingPrice(?string $buyingPrice): self
    {
        $this->buyingPrice = $buyingPrice;

        return $this;
    }

    public function getRestoration(): ?string
    {
        return $this->restoration;
    }

    public function setRestoration(?string $restoration): self
    {
        $this->restoration = $restoration;

        return $this;
    }

    public function getLength(): ?string
    {
        return $this->length;
    }

    public function setLength(string $length): self
    {
        $this->length = $length;

        return $this;
    }

    public function getMaxWidth(): ?string
    {
        return $this->maxWidth;
    }

    public function setMaxWidth(string $maxWidth): self
    {
        $this->maxWidth = $maxWidth;

        return $this;
    }

    public function getMaxDraught(): ?string
    {
        return $this->maxDraught;
    }

    public function setMaxDraught(string $maxDraught): self
    {
        $this->maxDraught = $maxDraught;

        return $this;
    }

    /**
     * @return Collection<int, Image>
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Image $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
            $image->setBoat($this);
        }

        return $this;
    }

    public function removeImage(Image $image): self
    {
        if ($this->images->removeElement($image)) {
            // set the owning side to null (unless already changed)
            if ($image->getBoat() === $this) {
                $image->setBoat(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Reservation>
     */
    public function getReservations(): Collection
    {
        return $this->reservations;
    }

    public function addReservation(Reservation $reservation): self
    {
        if (!$this->reservations->contains($reservation)) {
            $this->reservations[] = $reservation;
            $reservation->setBoat($this);
        }

        return $this;
    }

    public function removeReservation(Reservation $reservation): self
    {
        if ($this->reservations->removeElement($reservation)) {
            // set the owning side to null (unless already changed)
            if ($reservation->getBoat() === $this) {
                $reservation->setBoat(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Testimonial>
     */
    public function getTestimonials(): Collection
    {
        return $this->testimonials;
    }

    public function addTestimonial(Testimonial $testimonial): self
    {
        if (!$this->testimonials->contains($testimonial)) {
            $this->testimonials[] = $testimonial;
            $testimonial->setBoat($this);
        }

        return $this;
    }

    public function removeTestimonial(Testimonial $testimonial): self
    {
        if ($this->testimonials->removeElement($testimonial)) {
            // set the owning side to null (unless already changed)
            if ($testimonial->getBoat() === $this) {
                $testimonial->setBoat(null);
            }
        }

        return $this;
    }

    public function getLat(): ?float
    {
        return $this->lat;
    }

    public function setLat(float $lat): self
    {
        $this->lat = $lat;

        return $this;
    }

    public function getLon(): ?float
    {
        return $this->lon;
    }

    public function setLon(float $lon): self
    {
        $this->lon = $lon;

        return $this;
    }
}
