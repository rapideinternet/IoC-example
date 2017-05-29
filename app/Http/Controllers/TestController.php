<?php

namespace App\Http\Controllers;

use App\Services\Contract\FtpStorage;

class TestController extends Controller
{
    /**
     * @var FtpStorage
     */
    private $ftpStorage;

    /**
     * TestController constructor.
     * @param FtpStorage $ftpStorage
     */
    public function __construct(FtpStorage $ftpStorage)
    {
        $this->ftpStorage = $ftpStorage;
    }

    public function test()
    {
        dd($this->ftpStorage);
    }
}
