<?php


namespace App\Service;


use Monolog\Logger;

trait AccessLogger
{
    /**
     * @var $logger Logger
     */
    public $logger;

    /**
     * @param Logger $logger
     */
    public function setLogger(Logger $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @return Logger
     */
    public function getLogger()
    {
        return $this->logger;
    }
}