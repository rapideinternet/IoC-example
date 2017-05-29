<?php


namespace App\Services\Contract;


interface Storage
{
    public function get($path);

    public function set($path, $content);
}