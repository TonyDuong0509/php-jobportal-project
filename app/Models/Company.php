<?php

namespace App\Models;

class Company
{
    protected $id;
    protected $website;
    protected $jobPostings = [];
    protected $logo;
    protected $employee;
    protected $createdAt;
    protected $userId;

    public function __construct(
        $id,
        $website,
        $jobPostings,
        $logo,
        $employee,
        $createdAt,
        $userId
    ) {
        $this->id = $id;
        $this->website = $website;
        $this->jobPostings = $jobPostings;
        $this->logo = $logo;
        $this->employee = $employee;
        $this->createdAt = $createdAt;
        $this->userId = $userId;
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
     * Get the value of website
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set the value of website
     */
    public function setWebsite($website): self
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get the value of jobPostings
     */
    public function getJobPostings()
    {
        return $this->jobPostings;
    }

    /**
     * Set the value of jobPostings
     */
    public function setJobPostings($jobPostings): self
    {
        $this->jobPostings = $jobPostings;

        return $this;
    }

    /**
     * Get the value of logo
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set the value of logo
     */
    public function setLogo($logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get the value of employee
     */
    public function getEmployee()
    {
        return $this->employee;
    }

    /**
     * Set the value of employee
     */
    public function setEmployee($employee): self
    {
        $this->employee = $employee;

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

    /**
     * Get the value of userId
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the value of userId
     */
    public function setUserId($userId): self
    {
        $this->userId = $userId;

        return $this;
    }
}
