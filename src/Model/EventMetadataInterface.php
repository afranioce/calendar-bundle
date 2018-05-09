<?php

namespace Afranioce\CalendarBundle\Model;

use Doctrine\Common\Collections\Collection;

interface EventMetadataInterface
{
    /**
     * Get the event metadata unique id
     *
     * @return mixed
     */
    public function getId();

    /**
     * @return EventInterface
     */
    public function getEvent(): ?EventInterface;

    /**
     * @param EventInterface $event
     * @return self
     */
    public function setEvent(?EventInterface $event);

    /**
     * @return ParticipantInterface
     */
    public function getParticipant(): ?ParticipantInterface;

    /**
     * @param ParticipantInterface $participant
     * @return self
     */
    public function setParticipant(?ParticipantInterface $participant);
}
