<?php
// src/Animal.php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'animaux')]
class Animal
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    private string $type;

    #[ORM\Column(type: 'integer')]
    private int $age;

    #[ORM\Column(type: 'string', length: 100)]
    private string $sante;

    /** Many animals have one equipment. This is the owning side. */
    #[ORM\ManyToOne(targetEntity: Equipment::class)]
    #[ORM\JoinColumn(name: 'equipment_id', referencedColumnName: 'id', nullable: false)]
    private Equipment|null $equipment = null;

    // Getters et setters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getSante(): string
    {
        return $this->sante;
    }

    public function setSante(string $sante): void
    {
        $this->sante = $sante;
    }

    public function getEquipment(): ?Equipment
    {
        return $this->equipment;
    }

    public function setEquipment(?Equipment $equipment): void
    {
        $this->equipment = $equipment;
    }
}
