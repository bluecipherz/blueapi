<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Wallet;
use App\WalletReport;

class RoomManagerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$walletAmout = Wallet::find(1);
		if(!isset($walletAmout)){ 
			$walletAmout = ['id'=>0, 'amount'=>0, 'week_fund'=>0];
		}

		$WalletReports = WalletReport::all();

		return ['wallet'=>$walletAmout, 'reports'=>$WalletReports];
	} 

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		// $taskbag = new Taskbag;

		// $taskbag->name = $request->input('name'); 
		// $taskbag->parent_id = $request->input('parent_id');
		// $taskbag->type = $request->input('type');
		// $taskbag->project_id = $request->input('project_id');
		// $taskbag->level = $request->input('level');

		// $taskbag->save();

		// return $taskbag;
	}

	public function insertFund(Request $request)
	{
		// Insert to fund report
		$WalletReport = new WalletReport;
		$WalletReport->description = $request->input('description');
		$WalletReport->user_id = $request->input('user_id');
		$WalletReport->cat_id = $request->input('cat_id');
		$WalletReport->amount = $request->input('amount');
		$WalletReport->verified = $request->input('verified'); 
		$WalletReport->save();
		
		// update wallet
		$walletAmout = Wallet::find(1);
		if(isset($walletAmout)){
			$walletAmout->amount = $walletAmout->amount + $request->input('amount');
		}else{
			$walletAmout = new wallet;
			$walletAmout->amount = $request->input('amount');
			$walletAmout->week_fund = 0;
		}
		$walletAmout->save();

		return ['status'=>true, 'message'=> 'Request Successful'];
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request)
	{
		// $id = (int) $request->input('id');
		// $taskbag = Taskbag::find($id);

		// $taskbag->name = $request->input('name'); 
		// $taskbag->parent_id = $request->input('parent_id');
		// $taskbag->type = $request->input('type');
		// $taskbag->project_id = $request->input('project_id');
		// $taskbag->level = $request->input('level');

		// $taskbag->save();

		// return $taskbag;
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Request $request)
	{
		//
		return $request;
	}

}
