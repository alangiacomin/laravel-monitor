<?php

namespace App\Repositories;

use Alangiacomin\LaravelBasePack\Repositories\IRepository;

interface ILogRepository extends IRepository
{
    /**
     * Create and save new element.
     *
     * @param $params
     */
    function createNew(...$params);

    /**
     * Retrieves list of all logs.
     *
     * @param  array  $options
     */
    function getList(array $options = []);
}
