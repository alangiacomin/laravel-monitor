<?php

namespace App\OpenApi\RequestBodies;

use App\OpenApi\Schemas\LogSchema;
use GoldSpecDigital\ObjectOrientedOAS\Objects\MediaType;
use GoldSpecDigital\ObjectOrientedOAS\Objects\RequestBody;
use Vyuldashev\LaravelOpenApi\Factories\RequestBodyFactory;

class LogRequestBody extends RequestBodyFactory
{
    public function build(): RequestBody
    {
        return RequestBody::create()
            ->description('Log data')
            ->content(
                MediaType::json()
                    ->schema(LogSchema::ref())
            );
    }
}
