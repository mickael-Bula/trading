<?php

namespace App\Entity;

use App\Repository\CacRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CacRepository::class)
 */
class Cac
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
    private $createdAt;

    /**
     * @ORM\Column(type="integer")
     */
    private $closing;

    /**
     * @ORM\Column(type="integer")
     */
    private $opening;

    /**
     * @ORM\Column(type="integer")
     */
    private $higher;

    /**
     * @ORM\Column(type="integer")
     */
    private $lower;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getClosing(): ?int
    {
        return $this->closing;
    }

    public function setClosing(int $closing): self
    {
        $this->closing = $closing;

        return $this;
    }

    public function getOpening(): ?int
    {
        return $this->opening;
    }

    public function setOpening(int $opening): self
    {
        $this->opening = $opening;

        return $this;
    }

    public function getHigher(): ?int
    {
        return $this->higher;
    }

    public function setHigher(int $higher): self
    {
        $this->higher = $higher;

        return $this;
    }

    public function getLower(): ?int
    {
        return $this->lower;
    }

    public function setLower(int $lower): self
    {
        $this->lower = $lower;

        return $this;
    }
}
