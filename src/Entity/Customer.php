<?php

namespace App\Entity;

use App\Repository\CustomerRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CustomerRepository::class)]
class Customer extends User
{
    #[ORM\Column(length: 255)]
    private ?string $phone = null;

    #[ORM\Column]
    private ?bool $is_active = null;

    /**
     * @var Collection<int, RentalContract>
     */
    #[ORM\OneToMany(targetEntity: RentalContract::class, mappedBy: 'customer')]
    private Collection $contracts;

    public function __construct()
    {
        parent::__construct();
        $this->contracts = new ArrayCollection();
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): static
    {
        $this->phone = $phone;

        return $this;
    }

    public function isActive(): ?bool
    {
        return $this->is_active;
    }

    public function setIsActive(bool $is_active): static
    {
        $this->is_active = $is_active;

        return $this;
    }

    /**
     * @return Collection<int, RentalContract>
     */
    public function getContracts(): Collection
    {
        return $this->contracts;
    }

    public function addContract(RentalContract $contract): static
    {
        if (!$this->contracts->contains($contract)) {
            $this->contracts->add($contract);
            $contract->setCustomer($this);
        }

        return $this;
    }

    public function removeContract(RentalContract $contract): static
    {
        if ($this->contracts->removeElement($contract)) {
            // set the owning side to null (unless already changed)
            if ($contract->getCustomer() === $this) {
                $contract->setCustomer(null);
            }
        }

        return $this;
    }
}
