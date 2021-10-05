<?php

namespace App\Entity;

use App\Repository\UtilisateurLabelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UtilisateurLabelRepository::class)
 */
class UtilisateurLabel
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $dateObtention;

    /**
     * @ORM\Column(type="float")
     */
    private $note;

    /**
     * @ORM\ManyToOne(targetEntity=Label::class, inversedBy="label")
     * @ORM\JoinColumn(nullable=false)
     */
    private $label;

    /**
     * @ORM\ManyToOne(targetEntity=Utilisateur::class, inversedBy="utilisateur")
     * @ORM\JoinColumn(nullable=false)
     */
    private $utilisateur;



    public function __construct()
    {
        $this->labels = new ArrayCollection();
        $this->utilisateurs = new ArrayCollection();
        $this->idLabel = new ArrayCollection();
        $this->idUtilisateur = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateObtention(): ?\DateTimeInterface
    {
        return $this->dateObtention;
    }

    public function setDateObtention(\DateTimeInterface $dateObtention): self
    {
        $this->dateObtention = $dateObtention;

        return $this;
    }

    public function getNote(): ?float
    {
        return $this->note;
    }

    public function setNote(float $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getLabel(): ?Label
    {
        return $this->label;
    }

    public function setLabel(?Label $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getUtilisateur(): ?Utilisateur
    {
        return $this->utilisateur;
    }

    public function setUtilisateur(?Utilisateur $utilisateur): self
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }



}
