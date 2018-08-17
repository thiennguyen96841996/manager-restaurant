<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Notification;
use App\User;
use Auth;
use Carbon\Carbon;

class ReviewVacation implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $from_user_name;
    public $type;
    public $type_id;
    public $diff_time;
    public $diff_type;
    public $avatar;
    public $count;
    public $to_user_id;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        $to_user_id = Notification::find($id)->to_user_id;
        $from_user_id = Notification::find($id)->from_user_id;
        $this->to_user_id = Notification::find($id)->to_user_id;
        $this->from_user_name = User::findOrFail($from_user_id)->name;
        $this->avatar = User::findOrFail($from_user_id)->avatar;
        $this->type = Notification::find($id)->type;
        $this->type_id = Notification::find($id)->type_id;
        $created_at = Notification::find($id)->created_at;
        $this->diff_time = $created_at->diffInSeconds(Carbon::now());
        $this->diff_type = 'seconds';
        if ($this->diff_time > 59) {
            $this->diff_time = $created_at->diffInMinutes(Carbon::now());
            $this->diff_type = 'minutes';
            if ($this->diff_time > 59) {
                $this->diff_time = $created_at->diffInHours(Carbon::now());
                $this->diff_type = 'hours';
                if ($this->diff_time > 23) {
                    $this->diff_time = $created_at->diffInDays(Carbon::now());
                    $this->diff_type = 'days';
                }
            }
        }
        $this->count = Notification::where(['to_user_id' => $to_user_id])->where(['read' => 0])->count();
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return ['review-vacation'];
    }
}
