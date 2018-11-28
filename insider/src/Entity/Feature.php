<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FeatureRepository")
 */
class Feature
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank
     */
    private $FeatureName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $FeatureDescription;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $FeatureNotationPos;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $FeatureNotationNeg;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $FeatureType;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFeatureName(): ?string
    {
        return $this->FeatureName;
    }

    public function setFeatureName(string $FeatureName): self
    {
        $this->FeatureName = $FeatureName;

        return $this;
    }

    public function getFeatureDescription(): ?string
    {
        return $this->FeatureDescription;
    }

    public function setFeatureDescription(string $FeatureDescription): self
    {
        $this->FeatureDescription = $FeatureDescription;

        return $this;
    }

    public function getFeatureNotationPos(): ?int
    {
        return $this->FeatureNotationPos;
    }

    public function setFeatureNotationPos(?int $FeatureNotationPos): self
    {
        $this->FeatureNotationPos = $FeatureNotationPos;

        return $this;
    }

    public function getFeatureNotationNeg(): ?int
    {
        return $this->FeatureNotationNeg;
    }

    public function setFeatureNotationNeg(?int $FeatureNotationNeg): self
    {
        $this->FeatureNotationNeg = $FeatureNotationNeg;

        return $this;
    }

    public function getFeatureType(): ?string
    {
        return $this->FeatureType;
    }

    public function setFeatureType(string $FeatureType): self
    {
        $this->FeatureType = $FeatureType;

        return $this;
    }
}
