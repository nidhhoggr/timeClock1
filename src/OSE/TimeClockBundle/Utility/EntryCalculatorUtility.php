<?php
namespace OSE\TimeClockBundle\Utility;
use Doctrine\ORM\EntityManager;


class EntryCalculatorUtility {

    private $em;
    private $lastEntryIsClockin;

    public function __construct(EntityManager $em) 
    {
        $this->em = $em;
    }

    public function getTotalHoursFromEntries($entries) 
    {

        $accum_min = null;

        foreach($entries as $i=>$entry) {

            //skip double entries of th  both clockin value
            if($entry->getEntryType()->getIsClockin() == $this->lastEntryIsClockin)
                continue;

            //if the entry is clocking out then calculate the difference
            if(!$entry->getEntryType()->getIsClockin())
                $accum_min += (int)$this->calcTimeDiffBetweenEntries($entries,$i);

            $this->lastEntryIsClockin = $entry->getEntryType()->getIsClockin();
        }
 
        $hours = round($accum_min / 60, 2);

        return $hours;
    }

    public function calcTimeDiffBetweenEntries($entries,$i) 
    {
        $interval = $entries[$i]->getTime()->diff($entries[$i - 1]->getTime());
        return (int) $interval->format('%i');
    }

}
