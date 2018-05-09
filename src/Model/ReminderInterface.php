<?php

namespace Afranioce\CalendarBundle\Model;

/**
 * @author Afranio Martins <afranioce@gmail.com>
 */
interface ReminderInterface
{
    const NOTIFY_BY_EMAIL = 1;
    const NOTIFY_BY_NOTIFICATION = 2;

    /**
     * @return mixed
     */
    public function getId();

    /**
     * @return EventInterface
     */
    public function getEvent(): ?EventInterface;

    /**
     * @param EventInterface $event
     */
    public function setEvent(?EventInterface $event);

    /**
     * @return int
     */
    public function getBeforeOn(): ?int;

    /**
     * @param int $beforeOn
     */
    public function setBeforeOn(?int $beforeOn);

    /**
     * @return int
     */
    public function getUnitOfTime(): ?int;

    /**
     * @param int $unitOfTime
     */
    public function setUnitOfTime(?int $unitOfTime);

    /**
     * @return int
     */
    public function getNotifyBy(): ?int;

    /**
     * @param int $notifyBy
     */
    public function setNotifyBy(?int $notifyBy);
}
