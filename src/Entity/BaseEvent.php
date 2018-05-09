<?php

namespace Afranioce\CalendarBundle\Entity;

use Afranioce\CalendarBundle\Model\Event;
use Doctrine\Common\Collections\ArrayCollection;

abstract class BaseEvent extends Event
{
    public function __construct()
    {
        $this->metadata = new ArrayCollection();
        $this->reminders = new ArrayCollection();
    }

    /**
     * {@inheritdoc}
     */
    public function prePersist()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    /**
     * {@inheritdoc}
     */
    public function preUpdate()
    {
        $this->updatedAt = new \DateTime();
    }
}
