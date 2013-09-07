<?php
namespace OSE\TimeClockBundle\Tests\Entity;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
 
class EntryTypeRespositoryTest extends WebTestCase {
    private $repo;
 

    public function setUp() {

        $kernel = static::createKernel();
        $kernel->boot();
        $this->repo = $kernel->getContainer()
                             ->get('doctrine.orm.entity_manager')
                             ->getRepository('OSETimeClockBundle:EntryType');
    }


    public function testGetClockInEntryTypes()
    {

        $this->assertEquals(count($this->repo->findByIsClockin('false')), 2);
    }

    public function testGetClockOutEntryTypes()
    {

        $this->assertEquals(count($this->repo->findByIsClockin('true')), 2);
    }


}
