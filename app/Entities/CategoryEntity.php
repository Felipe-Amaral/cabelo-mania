<?php

namespace App\Entities;

use Illuminate\Contracts\Support\Arrayable;

class CategoryEntity implements Arrayable
{
    protected int    $id;
    protected string $description;
    protected string $createdAt;
    protected string $updatedAt;

    public function __construct(array $data)
    {
        $this->populate($data);
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt($updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    public function toArray(): array
    {
        return [
            'id'          => $this->getId(),
            'description' => $this->getDescription(),
            'created_at'  => $this->getCreatedAt(),
            'updated_at'  => $this->getUpdatedAt()
        ];
    }

    private function populate(array $data): self
    {
        $this->setId((int)             $data['id']          ?? null);
        $this->setDescription((string) $data['description'] ?? null);
        $this->setCreatedAt((string)   $data['created_at']  ?? null);
        $this->setUpdatedAt((string)   $data['updated_at']  ?? null);

        return $this;
    }
}
