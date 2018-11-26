<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BugRepository")
 */
class Bug
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $BugId;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $BugName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $BugDescription;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $BugStatus;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBugId(): ?int
    {
        return $this->BugId;
    }

    public function setBugId(int $BugId): self
    {
        $this->BugId = $BugId;

        return $this;
    }

    public function getBugName(): ?string
    {
        return $this->BugName;
    }

    public function setBugName(string $BugName): self
    {
        $this->BugName = $BugName;

        return $this;
    }

    public function getBugDescription(): ?string
    {
        return $this->BugDescription;
    }

    public function setBugDescription(string $BugDescription): self
    {
        $this->BugDescription = $BugDescription;

        return $this;
    }

    public function getBugStatus(): ?string
    {
        return $this->BugStatus;
    }

    public function setBugStatus(string $BugStatus): self
    {
        $this->BugStatus = $BugStatus;

        return $this;
    }
}
