<?php

namespace App\Entity;

use App\Repository\ExtraitNaissanceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ExtraitNaissanceRepository::class)
 */
class ExtraitNaissance
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="date")
     */
    private $DateNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $LieuDeNaissance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Sexe;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PrenomPere;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $PrenomMere;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomPere;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $NomMere;

    /**
     * @ORM\Column(type="integer")
     */
    private $NumeroRegistre;

    /**
     * @ORM\Column(type="text")
     */
    private $documentJoint;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Region;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Departement;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Commune;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getDateNaissance(): ?\DateTimeInterface
    {
        return $this->DateNaissance;
    }

    public function setDateNaissance(\DateTimeInterface $DateNaissance): self
    {
        $this->DateNaissance = $DateNaissance;

        return $this;
    }

    public function getLieuDeNaissance(): ?string
    {
        return $this->LieuDeNaissance;
    }

    public function setLieuDeNaissance(string $LieuDeNaissance): self
    {
        $this->LieuDeNaissance = $LieuDeNaissance;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->Sexe;
    }

    public function setSexe(string $Sexe): self
    {
        $this->Sexe = $Sexe;

        return $this;
    }

    public function getPrenomPere(): ?string
    {
        return $this->PrenomPere;
    }

    public function setPrenomPere(string $PrenomPere): self
    {
        $this->PrenomPere = $PrenomPere;

        return $this;
    }

    public function getPrenomMere(): ?string
    {
        return $this->PrenomMere;
    }

    public function setPrenomMere(string $PrenomMere): self
    {
        $this->PrenomMere = $PrenomMere;

        return $this;
    }

    public function getNomPere(): ?string
    {
        return $this->NomPere;
    }

    public function setNomPere(string $NomPere): self
    {
        $this->NomPere = $NomPere;

        return $this;
    }

    public function getNomMere(): ?string
    {
        return $this->NomMere;
    }

    public function setNomMere(string $NomMere): self
    {
        $this->NomMere = $NomMere;

        return $this;
    }

    public function getNumeroRegistre(): ?int
    {
        return $this->NumeroRegistre;
    }

    public function setNumeroRegistre(int $NumeroRegistre): self
    {
        $this->NumeroRegistre = $NumeroRegistre;

        return $this;
    }

    public function getDocumentJoint(): ?string
    {
        return $this->documentJoint;
    }

    public function setDocumentJoint(string $documentJoint): self
    {
        $this->documentJoint = $documentJoint;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->Region;
    }

    public function setRegion(string $Region): self
    {
        $this->Region = $Region;

        return $this;
    }

    public function getDepartement(): ?string
    {
        return $this->Departement;
    }

    public function setDepartement(string $Departement): self
    {
        $this->Departement = $Departement;

        return $this;
    }

    public function getCommune(): ?string
    {
        return $this->Commune;
    }

    public function setCommune(string $Commune): self
    {
        $this->Commune = $Commune;

        return $this;
    }
}
