<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Event\ProjectAction;
use App\Notifications\ProjectActionNotification;

class ProjectActionNotify
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(ProjectAction $event)
    {
        //
        $Project = $event->getProject;
        $action = $event->action;
        $Project->notify(new ProjectActionNotification($Project, $action));

    }
}
