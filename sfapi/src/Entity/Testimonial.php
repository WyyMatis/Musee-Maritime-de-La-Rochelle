<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\TestimonialRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ApiResource(
 *     normalizationContext={"groups"={"testimonials:read"}},
 *     denormalizationContext={"groups"={"testimonials:write"}}
 * )
 * @ORM\Entity(repositoryClass=TestimonialRepository::class)
 */
class Testimonial
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"testimonials:read","testimonials:write","boats:read"})
     * @Assert\NotBlank()
     */
    private $author;

    /**
     * @ORM\Column(type="string", length=255)
     * @Groups({"testimonials:read","testimonials:write","boats:read"})
     * @Assert\NotBlank()
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Groups({"testimonials:read","testimonials:write","boats:read"})
     */
    private $story;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"testimonials:read","testimonials:write","boats:read"})
     */
    private $picture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Groups({"testimonials:read","testimonials:write","boats:read"})
     */
    private $audio;

    /**
     * @ORM\ManyToOne(targetEntity=Boat::class, inversedBy="testimonials")
     * @Groups({"testimonials:read","testimonials:write"})
     * @Assert\Valid()
     */
    private $boat;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getStory(): ?string
    {
        return $this->story;
    }

    public function setStory(string $story): self
    {
        $this->story = $story;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getAudio(): ?string
    {
        return $this->audio;
    }

    public function setAudio(?string $audio): self
    {
        $this->audio = $audio;

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
