<?php

namespace App\Entity;

use App\Repository\LabelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LabelRepository::class)
 */
class Label
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $url_image;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity=UtilisateurLabel::class, mappedBy="labels")
     */
    private $Label;

    /**
     * @ORM\OneToMany(targetEntity=Utilisateurlabel::class, mappedBy="idLabel")
     */
    private $idLabel;

    public function __construct()
    {
        $this->Label = new ArrayCollection();
        $this->idLabel = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getUrlImage(): ?string
    {
        return $this->url_image;
    }

    public function setUrlImage(?string $url_image): self
    {
        $this->url_image = $url_image;

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

    /**
     * @return Collection|UtilisateurLabel[]
     */
    public function getLabel(): Collection
    {
        return $this->Label;
    }

    public function addLabel(UtilisateurLabel $label): self
    {
        if (!$this->Label->contains($label)) {
            $this->Label[] = $label;
            $label->addLabel($this);
        }

        return $this;
    }

    public function removeLabel(UtilisateurLabel $label): self
    {
        if ($this->Label->removeElement($label)) {
            $label->removeLabel($this);
        }

        return $this;
    }

    /**
     * @return Collection|Utilisateurlabel[]
     */
    public function getIdLabel(): Collection
    {
        return $this->idLabel;
    }

    public function addIdLabel(Utilisateurlabel $idLabel): self
    {
        if (!$this->idLabel->contains($idLabel)) {
            $this->idLabel[] = $idLabel;
            $idLabel->setIdLabel($this);
        }

        return $this;
    }

    public function removeIdLabel(Utilisateurlabel $idLabel): self
    {
        if ($this->idLabel->removeElement($idLabel)) {
            // set the owning side to null (unless already changed)
            if ($idLabel->getIdLabel() === $this) {
                $idLabel->setIdLabel(null);
            }
        }

        return $this;
    }
}
