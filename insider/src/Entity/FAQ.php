<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FAQRepository")
 */
class FAQ
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=150)
     */
    private $FAQQuestion;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $FAQAnswer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFAQQuestion(): ?string
    {
        return $this->FAQQuestion;
    }

    public function setFAQQuestion(string $FAQQuestion): self
    {
        $this->FAQQuestion = $FAQQuestion;

        return $this;
    }

    public function getFAQAnswer(): ?string
    {
        return $this->FAQAnswer;
    }

    public function setFAQAnswer(string $FAQAnswer): self
    {
        $this->FAQAnswer = $FAQAnswer;

        return $this;
    }
}
