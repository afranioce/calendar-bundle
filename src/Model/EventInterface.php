<?php

namespace Afranioce\CalendarBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @author Afranio Martins <afranioce@gmail.com>
 */
interface EventInterface
{
    /**
     * Get the event unique id
     *
     * @return mixed
     */
    public function getId();

    /**
     * @return string
     */
    public function getTitle(): ?string;

    /**
     * @param string $title
     * @return self
     */
    public function setTitle(string $title);

    /**
     * @return string|null
     */
    public function getDescription(): ?string;

    /**
     * @param string|null $description
     * @return self
     */
    public function setDescription(?string $description);

    /**
     * @return \DateTimeInterface
     */
    public function getStartDate(): ?\DateTimeInterface;

    /**
     * @param \DateTimeInterface $start
     * @return self
     */
    public function setStartDate(\DateTimeInterface $start);

    /**
     * @return \DateTimeInterface
     */
    public function getEndDate(): ?\DateTimeInterface;

    /**
     * @param \DateTimeInterface $end
     * @return self
     */
    public function setEndDate(?\DateTimeInterface $end);

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedAt(): ?\DateTimeInterface;

    /**
     * @return bool
     */
    public function getIsFullDay(): bool;

    /**
     * @param bool $isFullDay
     * @return self
     */
    public function setIsFullDay(bool $isFullDay);

    /**
     * @return CategoryInterface
     */
    public function getCategory(): ?CategoryInterface;

    /**
     * @param CategoryInterface $category
     * @return self
     */
    public function setCategory(CategoryInterface $category);

    /**
     * @return mixed
     */
    public function getColor();

    /**
     * @param mixed $color
     */
    public function setColor($color);

    /**
     * @return Collection|EventMetadataInterface[]
     */
    public function getMetadata(): Collection;

    /**
     * @param EventMetadataInterface $metadata
     */
    public function addMetadata(EventMetadataInterface $metadata);

    /**
     * @param EventMetadataInterface $metadata
     */
    public function removeMetadata(EventMetadataInterface $metadata);

    /**
     * @return Collection|ReminderInterface[]
     */
    public function getReminders(): Collection;

    /**
     * @param ReminderInterface $reminder
     */
    public function addReminders(ReminderInterface $reminder);

    /**
     * @param ReminderInterface $reminder
     */
    public function removeReminder(ReminderInterface $reminder);
}
