<?php

namespace Afranioce\CalendarBundle\Entity;

use Afranioce\CalendarBundle\Model\Category;

abstract class BaseCategory extends Category
{
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
