<?php

namespace App\Entities;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Support\Facades\Date;

class ArticleEntity implements Arrayable
{
    protected int $id;
    protected string $title;
    protected bool $visible;
    protected int $categoryId;
    protected string $categoryName;
    protected string $seoDescription;
    protected string $content;
    protected Date $createdAt;
    protected Date $updatedAt;

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

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function getVisible(): bool
    {
        return $this->visible;
    }

    public function setVisible($visible): void
    {
        $this->visible = $visible;
    }

    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    public function setCategoryId($categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    public function getCategoryName(): string
    {
        return $this->categoryName;
    }

    public function setCategoryName($categoryName): void
    {
        $this->categoryName = $categoryName;
    }

    public function getSeoDescription(): string
    {
        return $this->seoDescription;
    }

    public function setSeoDescription($seoDescription): void
    {
        $this->seoDescription = $seoDescription;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent($content): void
    {
        $this->content = $content;
    }

    public function getCreatedAt(): Date
    {
        return $this->createdAt;
    }

    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt(): Date
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
            'id'              => $this->getId(),
            'title'           => $this->getTitle(),
            'visible'         => $this->getVisible(),
            'category_id'     => $this->getCategoryId(),
            'category_name'   => $this->getCategoryName(),
            'seo_description' => $this->getSeoDescription(),
            'content'         => $this->getContent()
        ];
    }

    private function populate(array $data): self
    {
        $this->setId((int)                $data['id']              ?? null);
        $this->setTitle((string)          $data['title']           ?? null);
        $this->setVisible((bool)          $data['visible']         ?? null);
        $this->setCategoryId((int)        $data['category_id']     ?? null);
        $this->setCategoryName((string)   $data['category_name']   ?? null);
        $this->setSeoDescription((string) $data['seo_description'] ?? null);
        $this->setContent((string)        $data['content']         ?? null);

        return $this;
    }
}
