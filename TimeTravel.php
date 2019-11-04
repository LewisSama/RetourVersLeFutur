<?php

class TimeTravel extends DateTime
{
    private $start;
    private $end;

    public function __construct(string $start, string $end){
        parent::__construct();
        $this->start = new DateTime($start);
        $this->end = new DateTime($end);
    }

    public function getTravelInfo()
    {
        $start = $this->start;
        $end = $this->end;
        $diff = $end->diff($start);
        return 'Il y a ' . $diff->y. ' années, ' . $diff->m . ' mois, ' . $diff->d . ' jours, ' .  $diff->h . ' heures, '. $diff->i . ' minutes, '. $diff->s . ' secondes entre les deux dates';
    }
}
