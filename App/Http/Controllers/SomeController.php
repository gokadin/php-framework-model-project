<?php

class SomeController extends \Library\Http\Controller
{
    public function test()
    {
        return new \Library\Http\Response(\Library\Http\Response::STATUS_OK, 'lala');
    }
}