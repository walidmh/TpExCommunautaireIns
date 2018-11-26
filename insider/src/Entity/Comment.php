<?php

namespace App\Entity;

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
     * @ORM\Column(type="integer")
     */
    private $CommentId;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CommentDescription;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCommentId(): ?int
    {
        return $this->CommentId;
    }

    public function setCommentId(int $CommentId): self
    {
        $this->CommentId = $CommentId;

        return $this;
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
}
