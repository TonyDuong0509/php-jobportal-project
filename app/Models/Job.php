<?php

namespace App\Models;

class Job
{
    protected $id;
    protected $title;
    protected $slug;
    protected $categoryId;
    protected $companyId;
    protected $description;
    protected $type;
    protected $offeredSalary;
    protected $experience;
    protected $qualification;
    protected $skillRequirement;
    protected $deadlineDate;
    protected $location;
    protected $quantity;
    protected $isFull;
    protected $image;
    protected $createdAt;

    public function __construct(
        $id,
        $title,
        $slug,
        $categoryId,
        $companyId,
        $description,
        $type,
        $offeredSalary,
        $experience,
        $qualification,
        $skillRequirement,
        $deadlineDate,
        $location,
        $quantity,
        $isFull,
        $image,
        $createdAt
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->slug = $slug;
        $this->categoryId = $categoryId;
        $this->companyId = $companyId;
        $this->description = $description;
        $this->type = $type;
        $this->offeredSalary = $offeredSalary;
        $this->experience = $experience;
        $this->qualification = $qualification;
        $this->skillRequirement = $skillRequirement;
        $this->deadlineDate = $deadlineDate;
        $this->location = $location;
        $this->quantity = $quantity;
        $this->isFull = $isFull;
        $this->image = $image;
        $this->createdAt = $createdAt;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle($title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of slug
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set the value of slug
     */
    public function setSlug($slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get the value of categoryId
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set the value of categoryId
     */
    public function setCategoryId($categoryId): self
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get the value of companyId
     */
    public function getCompanyId()
    {
        return $this->companyId;
    }

    /**
     * Set the value of companyId
     */
    public function setCompanyId($companyId): self
    {
        $this->companyId = $companyId;

        return $this;
    }

    /**
     * Get the value of description
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     */
    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     */
    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of offeredSalary
     */
    public function getOfferedSalary()
    {
        return $this->offeredSalary;
    }

    /**
     * Set the value of offeredSalary
     */
    public function setOfferedSalary($offeredSalary): self
    {
        $this->offeredSalary = $offeredSalary;

        return $this;
    }

    /**
     * Get the value of experience
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set the value of experience
     */
    public function setExperience($experience): self
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get the value of qualification
     */
    public function getQualification()
    {
        return $this->qualification;
    }

    /**
     * Set the value of qualification
     */
    public function setQualification($qualification): self
    {
        $this->qualification = $qualification;

        return $this;
    }

    /**
     * Get the value of skillRequirement
     */
    public function getSkillRequirement()
    {
        return $this->skillRequirement;
    }

    /**
     * Set the value of skillRequirement
     */
    public function setSkillRequirement($skillRequirement): self
    {
        $this->skillRequirement = $skillRequirement;

        return $this;
    }

    /**
     * Get the value of deadlineDate
     */
    public function getDeadlineDate()
    {
        return $this->deadlineDate;
    }

    /**
     * Set the value of deadlineDate
     */
    public function setDeadlineDate($deadlineDate): self
    {
        $this->deadlineDate = $deadlineDate;

        return $this;
    }

    /**
     * Get the value of location
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set the value of location
     */
    public function setLocation($location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get the value of quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set the value of quantity
     */
    public function setQuantity($quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get the value of isFull
     */
    public function getIsFull()
    {
        return $this->isFull;
    }

    /**
     * Set the value of isFull
     */
    public function setIsFull($isFull): self
    {
        $this->isFull = $isFull;

        return $this;
    }

    /**
     * Get the value of image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     */
    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of createdAt
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     */
    public function setCreatedAt($createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
