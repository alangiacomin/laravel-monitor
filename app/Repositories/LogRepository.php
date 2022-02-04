<?php

namespace App\Repositories;

use Alangiacomin\LaravelBasePack\Repositories\Repository;
use App\Models\Log;

class LogRepository extends Repository implements ILogRepository
{
    /**
     * @inheritdoc
     */
    public function createNew(...$params)
    {
        $log = new Log;

        foreach ($params as $key => $value)
        {
            $log->$key = $value;
        }

        $log->save();
    }

    /**
     * @inheritdoc
     */
    public function getList(array $options = [])
    {
        $column = 'id';
        $direction = 'asc';
        if (is_array($options['order'] ?? []))
        {
            $column = $options['order'][0] ?? $column;
            $direction = $options['order'][1] ?? $direction;
        }
        else
        {
            $column = $options['order'] ?? $column;
            $direction = $options['order'] ?? $direction;
        }
        return Log::orderBy($column, $direction);
    }
}
