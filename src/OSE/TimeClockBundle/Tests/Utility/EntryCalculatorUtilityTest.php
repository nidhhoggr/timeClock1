<?php
namespace OSE\TimeClockBundle\Tests\Utility;
use OSE\TimeClockBundle\Utility\EntryCalculatorUtility;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EntryCalculatorUtilityTest extends WebTestCase
{

    public function setUp() {
        $kernel = static::createKernel();
        $kernel->boot();
        $this->em = $kernel->getContainer()
            ->get('doctrine.orm.entity_manager');
    }

    public function testEntryCalculation() 
    {

        $ecu = new EntryCalculatorUtility($this->em);

        $calculation = $ecu->getTotalHoursFromEntries();

        $this->assertTrue($calculation > 1);
    } 

}
