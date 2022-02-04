<?php

namespace App\Http\Controllers\Api\V1;

use Alangiacomin\LaravelBasePack\Controllers\Controller;
use Alangiacomin\LaravelBasePack\Core\Enums\LogType;
use Alangiacomin\PhpUtils\Guid;
use App\OpenApi\RequestBodies\LogRequestBody;
use App\Repositories\ILogRepository;
use Illuminate\Http\Request;
use Vyuldashev\LaravelOpenApi\Attributes as OpenApi;

#[OpenApi\PathItem]
class LogController extends Controller
{
    /**
     * Constructor
     *
     * @param  ILogRepository  $logRepository
     */
    public function __construct(public ILogRepository $logRepository)
    {
    }

    /**
     * Store a newly created resource in storage
     *
     * @param  Request  $request
     */
    #[OpenApi\Operation]
    #[OpenApi\RequestBody(LogRequestBody::class)]
    public function store(Request $request)
    {
        $this->logRepository->createNew(
            correlation_id: $request->input('correlation_id') ?? Guid::newGuid(),
            type: $request->input('type') ?? LogType::Info,
            object_id: $request->input('object_id'),
            class: $request->input('class'),
            payload: $request->input('payload')
        );
    }
}
