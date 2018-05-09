<?php
namespace Afranioce\CalendarBundle\Model;

use Afranioce\CalendarBundle\Model\EventMetadataInterface;

class EventMetadata implements EventMetadataInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var EventInterface
     */
    protected $event;

    /**
     * @var ParticipantInterface
     */
    protected $participant;

    /**
     * Get the value of id
     *
     * @return  int
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of event
     *
     * @return  EventInterface
     */ 
    public function getEvent(): ?EventInterface
    {
        return $this->event;
    }

    /**
     * Set the value of event
     *
     * @param  EventInterface  $event
     *
     * @return  self
     */ 
    public function setEvent(?EventInterface $event): self
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Get the value of participant
     *
     * @return  ParticipantInterface
     */ 
    public function getParticipant(): ?ParticipantInterface
    {
        return $this->participant;
    }

    /**
     * Set the value of participant
     *
     * @param  ParticipantInterface  $participant
     *
     * @return  self
     */ 
    public function setParticipant(?ParticipantInterface $participant): self
    {
        $this->participant = $participant;

        return $this;
    }
}
