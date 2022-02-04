<?php

namespace App\View\Components;

use Alangiacomin\LaravelBasePack\Core\Enums\LogType;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LogTypeDescription extends Component
{
    public string $description;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(int $id)
    {
        $this->description = match (LogType::from($id))
        {
            LogType::CommandSent => "CommandSent",
            LogType::CommandReceived => "CommandReceived",
            LogType::EventSent => "EventSent",
            LogType::EventReceived => "EventReceived",
            LogType::Info => "Info",
            LogType::Warning => "Warning",
            LogType::Error => "Error",
            LogType::Exception => "Exception",
        };
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return Application|Factory|View
     */
    public function render(): View|Factory|Application
    {
        return view('components.log-type-description');
    }
}
