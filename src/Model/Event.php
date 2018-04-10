<?php

namespace Afranioce\CalendarBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Afranioce\CalendarBundle\Model\EventInterface;

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
     * @var bool
     */
    protected $isFullDay;

    /**
     * @var CategoryInterface
     */
    protected $category;

    /**
     * @var mixed|null
     */
    protected $color;

    /**
     * @var ArrayCollection[]|ParticipantInterface[]
     */
    protected $participants;

    /**
     * @var ArrayCollection|ReminderInterface[]
     */
    protected $reminders;

    public function __construct()
    {
        $this->participants = new ArrayCollection();
        $this->reminders = new ArrayCollection();
    }

    /**
     * Get the value of id
     *
     * @return  mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of title
     *
     * @return  string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @param  string  $title
     *
     * @return  self
     */
    public function setTitle(string $title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     *
     * @return  string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @param  string  $description
     *
     * @return  self
     */
    public function setDescription(string $description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of startDate
     *
     * @return  \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set the value of startDate
     *
     * @param  \DateTime  $startDate
     *
     * @return  self
     */
    public function setStartDate(\DateTime $startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get the value of endDate
     *
     * @return  \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set the value of endDate
     *
     * @param  \DateTime  $endDate
     *
     * @return  self
     */
    public function setEndDate(\DateTime $endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get the value of createdAt
     *
     * @return  \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set the value of createdAt
     *
     * @param  \DateTime  $createdAt
     *
     * @return  self
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get the value of isFullDay
     *
     * @return  bool
     */
    public function getIsFullDay()
    {
        return $this->isFullDay;
    }

    /**
     * Set the value of isFullDay
     *
     * @param  bool  $isFullDay
     *
     * @return  self
     */
    public function setIsFullDay(bool $isFullDay)
    {
        $this->isFullDay = $isFullDay;

        return $this;
    }

    /**
     * Get the value of category
     *
     * @return  CategoryInterface
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set the value of category
     *
     * @param  CategoryInterface  $category
     *
     * @return  self
     */
    public function setCategory(CategoryInterface $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get the value of color
     *
     * @return  mixed|null
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @param  mixed|null  $color
     *
     * @return  self
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return ArrayCollection|ParticipantInterface[]
     */
    public function getParticipants()
    {
        return $this->participants;
    }

    /**
     * @param ParticipantInterface $participant
     * @return self
     */
    public function removeParticipant(ParticipantInterface $participant)
    {
        $this->participants->removeElement($participant);

        return $this;
    }

    /**
     * @param ParticipantInterface $participant
     * @return self
     */
    public function addParticipant(ParticipantInterface $participant)
    {
        $this->participants->add($participant);

        return $this;
    }

    /**
     * @return ArrayCollection|ReminderInterface[]
     */
    public function getReminders()
    {
        return $this->reminders;
    }

    /**
     * @param ReminderInterface $reminder
     * @return self
     */
    public function addReminders(ReminderInterface $reminder)
    {
        $this->reminders->add($reminder);

        return $this;
    }

    /**
     * @param ReminderInterface $reminder
     * @return self
     */
    public function removeReminder(ReminderInterface $reminder)
    {
        $this->reminders->removeElement($reminder);
    }
}
