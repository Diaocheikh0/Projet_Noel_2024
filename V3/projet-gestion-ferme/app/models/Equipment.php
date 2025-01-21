<?php
// src/Equipment.php

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'equipement')]
class Equipment
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    private string $nom;

    #[ORM\Column(type: 'string', length: 100)]
    private string $etat;

    #[ORM\Column(type: 'boolean')]
    private bool $disponibilite;

    // Getters et setters
    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    public function getEtat(): string
    {
        return $this->etat;
    }

    public function setEtat(string $etat): void
    {
        $this->etat = $etat;
    }

    public function isDisponible(): bool
    {
        return $this->disponibilite;
    }

    public function setDisponibilite(bool $disponibilite): void
    {
        $this->disponibilite = $disponibilite;
    }
}
