<?php
/**
 * Created by PhpStorm.
 * User: MohammadSadjad
 * Date: 3/2/2015
 * Time: 2:50 PM
 */

namespace Repositories;

use App\Event;

class EventRepository {

    private $EventModel;

    public function __construct(Event $event)
    {
        $this->EventModel = $event;
    }

    /**
     * return the last event based on date
     *
     * @return mixed the last event
     */
    public function getLastEvent()
    {
        $allEvents = Event::where('held_at', '>', date("Y-m-d H:i:s"))->get();
        $allEvents->sortBy(function($role)
        {
            return $role->held_at;
        });
        return $allEvents->first();
    }
}