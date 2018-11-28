<?php

namespace App\Entity;

use App\Entity\Traits\TimestampableTrait;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BugRepository")
 */
class Bug
{
    use TimestampableTrait;

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
     * @Gedmo\Slug(field={"BugName"})
     * @ORM\Column(type="string", length=128, unique=true)
     */
    private $slug;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Comment", mappedBy="bugs")
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

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param mixed $slug
     */
    public function setSlug($slug): void
    {
        $this->slug = $slug;
    }

}
