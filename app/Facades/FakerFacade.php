<?php

namespace App\Facades;
use Illuminate\Support\Facades\Facade;
use Faker;

class FakerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Faker\Generator::class;
    }
}
