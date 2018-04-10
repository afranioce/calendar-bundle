<?php

namespace Afranioce\CalendarBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @author Afranio Martins <afranioce@gmail.com>
 */
class Category implements CategoryInterface
{
    /**
     * @var mixed
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * ArrayCollection
     */
    protected $events;

    /**
     * @var string
     */
    protected $color;

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * @param EventInterface $event
     * @return self
     */
    public function addEvent(EventInterface $event)
    {
        $this->events->add($event);

        return $this;
    }

    /**
     * @param EventInterface $event
     * @return self
     */
    public function removeEvent(EventInterface $event)
    {
        $this->events->removeElement($event);

        return $this;
    }

    /**
     * Get the value of color
     *
     * @return  string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set the value of color
     *
     * @param  string  $color
     *
     * @return  self
     */
    public function setColor(string $color)
    {
        $this->color = $color;

        return $this;
    }
}
