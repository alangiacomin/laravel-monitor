<?php

namespace App\OpenApi\Schemas;

use GoldSpecDigital\ObjectOrientedOAS\Contracts\SchemaContract;
use GoldSpecDigital\ObjectOrientedOAS\Objects\Schema;
use Vyuldashev\LaravelOpenApi\Contracts\Reusable;
use Vyuldashev\LaravelOpenApi\Factories\SchemaFactory;

class LogSchema extends SchemaFactory implements Reusable
{
    /**
     * @return SchemaContract
     */
    public function build(): SchemaContract
    {
        return Schema::object('Log')
            ->properties(
                Schema::string('id')->nullable(),
                Schema::string('correlation_id'),
                Schema::integer('type'),
                Schema::string('object_id')->nullable(),
                Schema::string('class')->nullable(),
                Schema::string('payload'),
                Schema::create('timestamp')->type(Schema::FORMAT_DATE_TIME)
            );
    }
}
