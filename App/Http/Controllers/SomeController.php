<?php

namespace App\Http\Controllers;

use Library\Http\Controller;
use Library\Http\Response;
use Library\DataMapper\DataMapper;

class SomeController extends Controller
{
    /**
     * @var DataMapper
     */
    private $dm;

    public function SomeController(DataMapper $dm)
    {
        $this->dm = $dm;
    }

    public function test()
    {
        return new Response(Response::STATUS_OK, 'lala');
    }
}