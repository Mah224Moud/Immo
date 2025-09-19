<?php

namespace App\Entity;

use App\Repository\HouseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HouseRepository::class)]
class House
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $address = null;

    #[ORM\Column(length: 255)]
    private ?string $type = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 15, scale: 2)]
    private ?string $default_rent = null;

    #[ORM\Column]
    private ?int $surface = null;

    #[ORM\Column]
    private ?int $bedrooms = null;

    #[ORM\Column]
    private ?int $rooms = null;

    #[ORM\Column]
    private ?int $bathrooms = null;

    #[ORM\Column]
    private ?bool $is_furnished = null;

    #[ORM\Column(length: 255)]
    private ?string $parking = null;

    #[ORM\Column]
    private ?bool $has_garden = null;

    #[ORM\Column]
    private ?bool $has_balcony = null;

    #[ORM\Column(length: 255)]
    private ?string $heating = null;

    #[ORM\Column(length: 255)]
    private ?string $availability_status = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTime $availability_date = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $created_at = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): static
    {
        $this->address = $address;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;

        return $this;
    }

    public function getDefaultRent(): ?string
    {
        return $this->default_rent;
    }

    public function setDefaultRent(string $default_rent): static
    {
        $this->default_rent = $default_rent;
        return $this;
    }

    public function getSurface(): ?int
    {
        return $this->surface;
    }

    public function setSurface(int $surface): static
    {
        $this->surface = $surface;

        return $this;
    }

    public function getBedrooms(): ?int
    {
        return $this->bedrooms;
    }

    public function setBedrooms(int $bedrooms): static
    {
        $this->bedrooms = $bedrooms;

        return $this;
    }

    public function getRooms(): ?int
    {
        return $this->rooms;
    }

    public function setRooms(int $rooms): static
    {
        $this->rooms = $rooms;

        return $this;
    }

    public function getBathrooms(): ?int
    {
        return $this->bathrooms;
    }

    public function setBathrooms(int $bathrooms): static
    {
        $this->bathrooms = $bathrooms;

        return $this;
    }

    public function getIsFurnished(): ?bool
    {
        return $this->is_furnished;
    }

    public function setIsFurnished(bool $is_furnished): static
    {
        $this->is_furnished = $is_furnished;
        return $this;
    }

    public function getParking(): ?string
    {
        return $this->parking;
    }

    public function setParking(string $parking): static
    {
        $this->parking = $parking;

        return $this;
    }

    public function getHasGarden(): ?bool
    {
        return $this->has_garden;
    }

    public function setHasGarden(bool $has_garden): static
    {
        $this->has_garden = $has_garden;
        return $this;
    }

    public function hasBalcony(): ?bool
    {
        return $this->has_balcony;
    }

    public function setHasBalcony(bool $has_balcony): static
    {
        $this->has_balcony = $has_balcony;

        return $this;
    }

    public function getHeating(): ?string
    {
        return $this->heating;
    }

    public function setHeating(string $heating): static
    {
        $this->heating = $heating;

        return $this;
    }

    public function getAvailabilityStatus(): ?string
    {
        return $this->availability_status;
    }

    public function setAvailabilityStatus(string $availability_status): static
    {
        $this->availability_status = $availability_status;

        return $this;
    }

    public function getAvailabilityDate(): ?\DateTime
    {
        return $this->availability_date;
    }

    public function setAvailabilityDate(?\DateTime $availability_date): static
    {
        $this->availability_date = $availability_date;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }
}
