<?php

namespace Afranioce\CalendarBundle\Model;

class Reminder implements ReminderInterface
{
    /**
     * @var mixed
     */
    protected $id;

    /**
     * @var EventInterface
     */
    protected $event;

    /**
     * @var int|null
     */
    protected $beforeOn;

    /**
     * @var int|null
     */
    protected $unitOfTime;

    /**
     * @var int|null
     */
    protected $notifyBy;

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
    public function getEvent(): ?EventInterface
    {
        return $this->event;
    }

    /**
     * {@inheritdoc}
     */
    public function setEvent(?EventInterface $event)
    {
        $this->event = $event;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getBeforeOn(): ?int
    {
        return $this->beforeOn;
    }

    /**
     * {@inheritdoc}
     */
    public function setBeforeOn(?int $beforeOn)
    {
        $this->beforeOn = $beforeOn;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUnitOfTime(): ?int
    {
        return $this->unitOfTime;
    }

    /**
     * {@inheritdoc}
     */
    public function setUnitOfTime(?int $unitOfTime)
    {
        $this->unitOfTime = $unitOfTime;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getNotifyBy(): ?int
    {
        return $this->notifyBy;
    }

    /**
     * {@inheritdoc}
     */ 
    public function setNotifyBy(?int $notifyBy)
    {
        $this->notifyBy = $notifyBy;

        return $this;
    }
}
