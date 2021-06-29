<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Project;

class ProjectAction
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $project;
    private $action;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Project $project, $action)
    {
        //
        $this->project = $project;
        $this->action = $action;
    }

    public function getProject(){
        return $this->project;
    }

    public function getAction(){
        return $this->action;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
