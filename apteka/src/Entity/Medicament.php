<?php

namespace App\Entity;

use App\Repository\MedicamentRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: MedicamentRepository::class)]
class Medicament
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateOfProduced = null;

    #[ORM\Column(length: 255)]
    private ?string $return = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getDateOfProduced(): ?\DateTimeInterface
    {
        return $this->dateOfProduced;
    }

    public function setDateOfProduced(\DateTimeInterface $dateOfProduced): static
    {
        $this->dateOfProduced = $dateOfProduced;

        return $this;
    }

    public function getReturn(): ?string
    {
        return $this->return;
    }

    public function setReturn(string $return): static
    {
        $this->return = $return;

        return $this;
    }
}
