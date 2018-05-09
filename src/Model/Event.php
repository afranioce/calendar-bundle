<?php

namespace Afranioce\CalendarBundle\Model;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Afranioce\CalendarBundle\Model\EventInterface;
use Symfony\Component\Cache\Tests\Adapter\PhpArrayAdapterWithFallbackTest;

/**
 * @author Afranio Martins <afranioce@gmail.com>
 */
class Event implements EventInterface
{
    /**
     * @var mixed
     */
    protected $id;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var \DateTime
     */
    protected $startDate;

    /**
     * @var \DateTime
     */
    protected $endDate;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var \DateTime
     */
    protected $updatedAt;

    /**
     * @var bool
     */
    protected $isFullDay = false;

    /**
     * @var CategoryInterface
     */
    protected $category;

    /**
     * @var mixed|null
     */
    protected $color;

    /**
     * @var ArrayCollection[]|EventMetadataInterface[]
     */
    protected $metadata;

    /**
     * @var ArrayCollection|ReminderInterface[]
     */
    protected $reminders;

    public function __construct()
    {
        $this->metadata = new ArrayCollection();
        $this->reminders = new ArrayCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function __toString()
    {
        return (string)$this->getName() ? : 'n/a';
    }

    public function prePersist()
    {
        $this->setCreatedAt(new \DateTime());
        $this->setUpdatedAt(new \DateTime());
    }

    public function preUpdate()
    {
        $this->setUpdatedAt(new \DateTime());
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * {@inheritdoc}
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * {@inheritdoc}
     */
    public function setDescription(? string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getStartDate(): ? \DateTimeInterface
    {
        return $this->startDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setStartDate(? \DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndDate(): ? \DateTimeInterface
    {
        return $this->endDate;
    }

    /**
     * {@inheritdoc}
     */
    public function setEndDate(?\DateTimeInterface $endDate): self
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdatedAt(): ? \DateTimeInterface
    {
        return $this->updatedAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setUpdatedAt(?\DateTimeInterface $updatedAt): ?\DateTimeInterface
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getIsFullDay(): bool
    {
        return $this->isFullDay;
    }

    /**
     * {@inheritdoc}
     */
    public function setIsFullDay(bool $isFullDay): self
    {
        $this->isFullDay = $isFullDay;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getCategory(): ?CategoryInterface
    {
        return $this->category;
    }

    /**
     * {@inheritdoc}
     */
    public function setCategory(?CategoryInterface $category): self
    {
        $this->category = $category;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * {@inheritdoc}
     */
    public function setColor($color): self
    {
        $this->color = $color;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getMetadata(): Collection
    {
        return $this->metadata;
    }

    /**
     * {@inheritdoc}
     */
    public function removeMetadata(EventMetadataInterface $metadata): self
    {
        $this->metadata->removeElement($metadata);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function addMetadata(EventMetadataInterface $metadata): self
    {
        $this->metadata->add($metadata);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getReminders(): Collection
    {
        return $this->reminders;
    }

    /**
     * {@inheritdoc}
     */
    public function addReminders(ReminderInterface $reminder): self
    {
        $this->reminders->add($reminder);

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function removeReminder(ReminderInterface $reminder): self
    {
        $this->reminders->removeElement($reminder);

        return $this;
    }
}
