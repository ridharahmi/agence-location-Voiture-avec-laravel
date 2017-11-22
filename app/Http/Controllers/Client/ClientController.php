<?php

namespace App\Http\Controllers\Client;

use Auth;
use App\Model\User;
use App\Model\Voiture;
use App\Model\Demande;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class ClientController extends Controller {
	public function __construct() {
		$this -> middleware('auth');
		$this -> middleware('client');
	}

	public function index() {
		$id = Auth::user() -> id;
		$voiture = count(Voiture::all());
		$demande = count(Demande::where('user_id', $id)->get());
		$total = Demande::where('user_id', $id)-> sum('total');	
		return view('client.action.client', compact('voiture', 'demande', 'total'));
	}

	public function setting(Request $request) {
		if ($request -> isMethod('post')) {
			$input = $request -> all();
			$id = Auth::user() -> id;
			$user = User::findOrFail($id) -> update($input);
			if ($user) {
				return redirect('SettingClient') -> with('info', 'Setting Updated successfully!');
			}
		}
		return view('client.action.setting');
	}

	public function password(Request $request) {
		if ($request -> isMethod('post')) {
			$this -> validate($request, 
			['password' => 'required', 
			'password_confirmation' => 'required|same:password', ]);
			$id = Auth::user() -> id;
			$input = $request -> all();
			$input['password'] = bcrypt($input['password']);
			$user = User::findOrFail($id) -> update($input);
			if ($user) {
				return redirect('PasswordClient') -> with('info', 'Password Updated successfully!');
			}
		}
		return view('client.action.password');
	}

}
