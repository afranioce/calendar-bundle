<?php

namespace Afranioce\CalendarBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

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
    public function getTitle();

    /**
     * @param string $title
     */
    public function setTitle(string $title);

    /**
     * @return string|null
     */
    public function getDescription();

    /**
     * @param string|null $description
     */
    public function setDescription($description = null);

    /**
     * @return \Datetime
     */
    public function getStartDate();

    /**
     * @param \DateTime $start
     */
    public function setStartDate(\DateTime $start);

    /**
     * @return void
     */
    public function getEndDate();

    /**
     * @param \DateTime $end
     */
    public function setEndDate(\DateTime $end);

    /**
     * @return \DateTime
     */
    public function getCreatedAt();

    /**
     * @return bool
     */
    public function getIsFullDay();

    /**
     * @param bool $isFullDay
     */
    public function setIsFullDay(bool $isFullDay);

    /**
     * @return CategoryInterface
     */
    public function getCategory();

    /**
     * @param CategoryInterface $category
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
     * @return ArrayCollection
     */
    public function getParticipants();

    /**
     * @param ParticipantInterface $participant
     */
    public function addParticipant(ParticipantInterface $participant);

    /**
     * @param ParticipantInterface $participant
     */
    public function removeParticipant(ParticipantInterface $participant);

    /**
     * @return ArrayCollection
     */
    public function getReminders();

    /**
     * @param ReminderInterface $reminder
     */
    public function addReminders(ReminderInterface $reminder);

    /**
     * @param ReminderInterface $reminder
     */
    public function removeReminder(ReminderInterface $reminder);
}
