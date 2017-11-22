<?php

namespace App\Http\Controllers\Admin;

use App\Model\User;
use App\Model\Role_user;
use App\Model\Demande;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClientController extends Controller {

	public function __construct() {
		$this -> middleware('auth');
		$this -> middleware('admin');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$client = User::where('id', '>', '1') -> paginate(10);
		return view('admin.client.GestionClient', compact('client'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.client.add');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		if ($request -> isMethod('post')) {
			$this -> validate($request, [
			'name' => 'required|max:255', 
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|min:6|confirmed', ]);
			$input = $request -> all();
			$input['password'] = bcrypt($input['password']);
			$user = User::create($input);
			if ($user) {
				$p = new Role_user();
				$p -> role_id = '2';
				$p -> user_id = $user -> id;
				$p -> save();
				if ($p) {
					return redirect('GestionClient') -> with('success', 'User created successfully!');
				}
			}
		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		$demande = Demande::where('user_id', $id)->get();
		$total = Demande::where('user_id', $id)-> sum('total');
		return view('admin.client.demande', compact('demande', 'total'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$role = Role_user::where('user_id', $id) -> delete();
		if ($role) {
			$user = User::FindOrFail($id) -> delete();
			if ($user) {
				return redirect() -> back() -> with('info', 'User deleted successfully!');
			}
		}

	}

}
