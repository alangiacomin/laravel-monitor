<?php

namespace App\Http\Controllers;

use Alangiacomin\LaravelBasePack\Controllers\Controller;
use App\Repositories\ILogRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class LogController extends Controller
{
    public function __construct(private ILogRepository $logRepository)
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $logs = $this->logRepository->getList([
            'order' => ['timestamp', 'desc']
        ])->paginate(10);
        return view('log.index', ['logs' => $logs]);
    }
}
