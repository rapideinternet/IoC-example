<?php


namespace App\Services\Decorator;


interface AccessLogger
{
    public function setLogger($logger);

    public function getLogger();
}