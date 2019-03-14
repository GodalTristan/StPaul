<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Sejour;
/**
 * Class SejourTest
 */
class SejourTest extends TestCase
{
    /**
     * @var sejour
     */
	protected $object;
	/**
     * Sets up the fixture, for example, opens a network connection.
     * This methodiscalledbefore a test isexecuted.
     */
	protected function setUp()
    {
        $this->object = new Sejour();
        $this->object->setSejintitule('Classe de mer');
        $this->object->setSejmontantmbi(170);
        $this->object->setSejdtedeb(new \DateTime('2016-05-02'));
        $this->object->setSejduree(10);
    }
       
	/**
     * Tears down the fixture, for example, closes a network connection.
     * This methodiscalledafter a test isexecuted.
     */
	protected function tearDown()
    {
    }
     /**
     * Test de la méthode getSejDteFin de la classe Sejour
     */
	public function testDteFin()
    {
        $this->setUp();

        $resultatAttendu = new \DateTime('2016-05-12');
        $resultatObserve = $this->object->getSejDteFin();
        $this->assertEquals($resultatAttendu, $resultatObserve);
    }

    public function testDteFormat()
    {
        $this->setUp();

        $resultatAttendu = '02-05-2016';
        $resultatObserve = $this->object->getSejDteFormatFR('2016-05-02');
        $this->assertEquals($resultatAttendu, $resultatObserve);
    }
}
