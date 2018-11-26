<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommentRepository")
 */
class Comment
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
    private $CommentDescription;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Bug", mappedBy="comments")
     */
    private $bugs;

    public function __construct()
    {
        $this->bugs = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommentDescription(): ?string
    {
        return $this->CommentDescription;
    }

    public function setCommentDescription(string $CommentDescription): self
    {
        $this->CommentDescription = $CommentDescription;

        return $this;
    }

    /**
     * @return Collection|Bug[]
     */
    public function getBugs(): Collection
    {
        return $this->bugs;
    }

    public function addBug(Bug $bug): self
    {
        if (!$this->bugs->contains($bug)) {
            $this->bugs[] = $bug;
            $bug->setComments($this);
        }

        return $this;
    }

    public function removeBug(Bug $bug): self
    {
        if ($this->bugs->contains($bug)) {
            $this->bugs->removeElement($bug);
            // set the owning side to null (unless already changed)
            if ($bug->getComments() === $this) {
                $bug->setComments(null);
            }
        }

        return $this;
    }
}
