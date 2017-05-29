<?php


namespace App\Services\Decorator;


use App\Services\Contract\Storage;

class LogDecorator implements Storage, AccessLogger
{

    use \App\Service\AccessLogger;

    /**
     * @var Storage
     */
    private $storage;

    /**
     * LogDecorator constructor.
     * @param Storage $storage
     */
    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
    }

    public function get($path)
    {

    }

    public function set($path, $content)
    {
        // TODO: Implement set() method.
    }
}