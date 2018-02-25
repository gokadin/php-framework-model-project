<?php

namespace App\Http\Controllers;

use Library\Http\Controller;
use Library\Http\Response;

class SomeController extends Controller
{
    public function test()
    {
        return new Response(Response::STATUS_OK, 'lala');
    }
}