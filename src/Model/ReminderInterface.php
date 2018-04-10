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
    public function getEvent();

    /**
     * @param EventInterface $event
     */
    public function setEvent(EventInterface $event);

    /**
     * @return int
     */
    public function getBeforeOn();

    /**
     * @param int $beforeOn
     */
    public function setBeforeOn(int $beforeOn);

    /**
     * @return int
     */
    public function getUnityOfTime();

    /**
     * @param int $unityOfTime
     */
    public function setUnityOfTime(int $unityOfTime);

    /**
     * @return int
     */
    public function getNotifyBy();

    /**
     * @param int $notifyBy
     */
    public function setNotifyBy(int $notifyBy);
}
