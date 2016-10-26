<?php namespace App;

use Illuminate\Database\Eloquent\Model; 
use App\User;

class Notification extends Model {

	protected $table = 'notification';

	public function newNotification($link){
		$user = User::find($link->user_id);

		$notification = new Notification;
		$notification->cat = $link->cat;
		$notification->link_type = $link->link_type;
		$notification->link_id = $link->id;
		$notification->user_id = $user->id;
		$notification->seen = false;

		if($link->cat == 'ROOM_WALLET'){
			if($link->link_type == 'FUND_INSERTED'){

				$notification->heading = 'Fund Inserted';
				$notification->description = $user->name .' inserted '.$link->amount.' Rs in the Room Wallet';

			}
		}

		$notification->save();
	}

}
