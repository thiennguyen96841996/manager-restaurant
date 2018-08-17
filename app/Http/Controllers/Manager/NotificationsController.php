<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notification;
use Auth;
use App\User;
use Carbon\Carbon;

class NotificationsController extends Controller
{
    public function fetch_noti_count()
    {
        if (Auth::check()) {
            $count = Notification::where(['to_user_id' => Auth::user()->id])->where(['read' => 0])->count();
        } else {
            $count = 0;
        }
        return $count;
    }

    public function fetch_noti_list()
    {
        if (Auth::check()) {
            $result = [];
            $notifications = Notification::where(['to_user_id' => Auth::user()->id])
                ->orderBy('created_at', 'DESC')->get();
            foreach ($notifications as $noti) {
                $tmp = [];
                $from_user_id = $noti['from_user_id'];
                $from_user_name = User::findOrFail($from_user_id)->name;
                $avatar = User::findOrFail($from_user_id)->avatar;
                $type = $noti['type'];
                $type_id = $noti['type_id'];
                $created_at = $noti['created_at'];
                $diff_time = $noti['created_at']->diffInSeconds(Carbon::now());
                $diff_type = 'seconds';
                if ($diff_time > 59) {
                    $diff_time = $noti['created_at']->diffInMinutes(Carbon::now());
                    $diff_type = 'minutes';
                    if ($diff_time > 59) {
                        $diff_time = $noti['created_at']->diffInHours(Carbon::now());
                        $diff_type = 'hours';
                        if ($diff_time > 23) {
                            $diff_time = $noti['created_at']->diffInDays(Carbon::now());
                            $diff_type = 'days';
                        }
                    }
                }
                array_push($tmp, $from_user_name, $type, $type_id, $diff_time, $diff_type, $avatar);
                array_push($result, $tmp);
            }
        }
        return $result;
    }
    public function read()
    {
        if (Auth::check()) {
            Notification::where(['to_user_id' => Auth::user()->id])->where(['read' => 0])->update(['read' => 1]);
        }
    }
}
