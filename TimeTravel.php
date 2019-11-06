<?php

class TimeTravel extends DateTime
{
    public $start;
    public $end;

    public function __construct(DateTimeImmutable $start, DateTime $end){
        parent::__construct();
        $this->start = $start;
        $this->end = $end;
    }
    public function setEnd(DateTimeImmutable $param){
        $this->end = $param;
    }

    public function getTravelInfo()
    {
        $diff = $this->end->diff($this->start);
        return 'Il y a ' . $diff->y. ' années, ' . $diff->m . ' mois, ' . $diff->d . ' jours, ' .  $diff->h . ' heures, '. $diff->i . ' minutes, '. $diff->s . ' secondes entre les deux dates';
    }
    public function findDate(DateInterval $interval){
        $start = $this->start;
        $result = $start->sub($interval);
        return $result;
    }
    public function backToFutureStepByStep(DatePeriod $step){
        echo '<ul>';
        foreach($step as $date) {
            echo '<li>' . $date->format('M d Y A h:i') . '</li>';
        }
        echo '</ul>';
    }
}

