<?php

namespace App\Isc\Test;

use Library\IscClient\Controllers\IscController;

class TestCommands extends IscController
{
    public function handleTest()
    {
        $this->respondOk();
    }
}