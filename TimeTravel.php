<?php

class TimeTravel extends DateTime
{
    public $start;
    public $end;

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
    public function findDate(DateInterval $interval){
        $start = $this->start;
        $result = $start->sub($interval);
        return $result->format('Y-m-d H:i:s');
    }
    public function backToFutureStepByStep(DatePeriod $step){
        echo '<ul>';
        foreach($step as $date){
            echo '<li>' .  $date->format('Y-m-d') . "</li>";
        }
        echo '</ul>';
    }
}
