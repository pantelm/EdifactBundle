<?php
/**
 * This class is part of the EdifactBundle
 *
 * @author Marc Pantel <pantel.m@gmail.com>
 */
namespace EdifactBundle\Service;

use EDI\Analyser;
use EDI\Encoder;
use EDI\Parser;
use EDI\Reader;

/**
 * Class Edifact
 *
 * @package EdifactBundle\Service
 */
class Edifact
{
    /**
     * Retrieve an Edi Reader
     *
     * @return Reader
     */
    public function getReader()
    {
        return new Reader();
    }

    /**
     * Retrieve an Edi Parser
     *
     * @return Parser
     */
    public function getParser()
    {
        return new Parser();
    }

    /**
     * Retrieve an Edi Encoder
     *
     * @return Encoder
     */
    public function getEncoder()
    {
        return new Encoder();
    }

    /**
     * Retrieve an Edi Analyser
     *
     * @return Analyser
     */
    public function getAnalyser()
    {
        return new Analyser();
    }
}