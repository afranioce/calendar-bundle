<?php

namespace Afranioce\CalendarBundle\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @author Afranio Martins <afranioce@gmail.com>
 */
interface CategoryInterface
{
    /**
     * @return mixed
     */
    public function getId();
    
    /**
     * @return string
     */
    public function getName();

    /**
     * @param string $name
     */
    public function setName(?string $name);

    /**
     * @return string
     */
    public function getColor();

    /**
     * @param string $color
     */
    public function setColor(?string $color);

    /**
     * @return Collection|EventInterface[]
     */
    public function getEvents(): Collection;

    /**
     * @param EventInterface $event
     */
    public function addEvent(EventInterface $event);

    /**
     * @param EventInterface $event
     */
    public function removeEvent(EventInterface $event);
}
