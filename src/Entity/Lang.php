<?php

namespace App\Entity;

use App\langEnum;
use App\Repository\LangRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LangRepository::class)]
class Lang
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, enumType: langEnum::class)]
    private ?langEnum $name = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?langEnum
    {
        return $this->name;
    }

    public function setName(langEnum $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getFormateName(): ?string
    {
        return $this->name?->value;
    }
}
