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

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Comment", inversedBy="bugs")
     */
    private $comments;


    public function getId(): ?int
    {
        return $this->id;
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

    public function getComments(): ?Comment
    {
        return $this->comments;
    }

    public function setComments(?Comment $comments): self
    {
        $this->comments = $comments;

        return $this;
    }

}
