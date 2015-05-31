<?php
/**
 * This class is part of EdifactBundle
 *
 * @author Marc Pantel <pantel.m@gmail.com>
 */

namespace EdifactBundle\Test\Service;

use EdifactBundle\Service\Edifact;

/**
 * Class ServiceTest
 *
 * @package EdifactBundle\Test\Service
 */
class ServiceTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test if the getReader function retrieve an Edi Reader
     */
    public function testGetReader()
    {
        $edifact = new Edifact();
        $reader = $edifact->getReader();

        $this->assertInstanceOf('EDI\Reader', $reader);

    }

    /**
     * Test if the getReader function retrieve an Edi Parser
     */
    public function testGetParser()
    {
        $edifact = new Edifact();

        $parser = $edifact->getParser();

        $this->assertInstanceOf('EDI\Parser', $parser);
    }

    /**
     * Test if the getReader function retrieve an Edi Encoder
     */
    public function testGetEncoder()
    {
        $edifact = new Edifact();

        $encoder = $edifact->getEncoder();

        $this->assertInstanceOf('EDI\Encoder', $encoder);
    }

    /**
     * Test if the getReader function retrieve an Edi Analyser
     */
    public function testGetAnalyser()
    {
        $edifact = new Edifact();

        $analyser = $edifact->getAnalyser();

        $this->assertInstanceOf('EDI\Analyser', $analyser);
    }
}
