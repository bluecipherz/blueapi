<?php namespace App;

use Illuminate\Database\Eloquent\Model; 
use App\User;

class Verification extends Model {

	protected $table = 'verification';

	public function verify($id,$user_id){
		$verification = Verification::where('verification_id', '=', $id);
		if(count(isset($verification)) > 0){
			if(count(isset($verification)) < $verification[0]->limit){
				
			}
		}else{
			return false;
		}
	}

}
