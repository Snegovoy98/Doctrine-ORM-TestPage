<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PageNameRepository")
 */
class PageName
{
    /**This class contains information about homePage
     *
     */
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $home;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $about_content;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $additional_info;

    /**
     * @ORM\Column(type="boolean")
     */
    private $show_additional_info;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updated_at;

    public function getId()
    {
        return $this->id;
    }

    public function getHome(): ?string
    {
        return $this->home;
    }

    public function setHome(string $home): self
    {
        $this->home = $home;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getAboutContent(): ?string
    {
        return $this->about_content;
    }

    public function setAboutContent(string $about_content): self
    {
        $this->about_content = $about_content;

        return $this;
    }

    public function getAdditionalInfo(): ?string
    {
        return $this->additional_info;
    }

    public function setAdditionalInfo(string $additional_info): self
    {
        $this->additional_info = $additional_info;

        return $this;
    }

    public function getShowAdditionalInfo(): ?bool
    {
        return $this->show_additional_info;
    }

    public function setShowAdditionalInfo(bool $show_additional_info): self
    {
        $this->show_additional_info = $show_additional_info;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updated_at;
    }

    public function setUpdatedAt(\DateTimeInterface $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}
