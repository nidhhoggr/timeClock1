<?php
namespace OSE\TimeClockBundle\Tests\Entity;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
 
class EntryRespositoryTest extends WebTestCase {
    private $repo;
 

    public function setUp() {

        $kernel = static::createKernel();
        $kernel->boot();
        $this->repo = $kernel->getContainer()
                             ->get('doctrine.orm.entity_manager')
                             ->getRepository('OSETimeClockBundle:Entry');
    }


    public function testGetUserEntries()
    {

        $this->assertEquals(count($this->repo->findAllEntriesByUserId(1)),4);
    }
}
