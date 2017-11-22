<?php

namespace App\Http\Controllers\Admin;

use Auth;
use App\Model\Voiture;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class VoitureController extends Controller {

	public function __construct() {
		$this -> middleware('auth');
		$this -> middleware('admin');
	}

	public function index() {
		$voiture = Voiture::paginate(8);
		return view('admin.voiture.GestionVoiture', compact('voiture'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		return view('admin.voiture.add');
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
			'title' => 'required',
			'description' => 'required|max:150',
			'price' => 'required',
			'image' => 'required', ]);
			$input = $request -> all();
			$input['user_id'] = Auth::user() -> id;
			if (isset($input['image'])) {
				$input['image'] = $this -> uploadImage($input['image']);
			}

			$voiture = Voiture::create($input);
			if ($voiture) {
				return redirect('GestionVoiture') -> with('success', 'Voiture created successfully!');
			}
		}
	}

	//upload image
	public function uploadImage($file) {
		$extension = $file -> getClientOriginalExtension();
		$sha1 = sha1($file -> getClientOriginalName());
		$filename = date('Y-m-d-h-i-s') . "_" . $sha1 . "." . $extension;
		$path = public_path('images/voiture/');
		$file -> move($path, $filename);
		return 'images/voiture/' . $filename;
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		$voiture = Voiture::findOrFail($id);
		return view('admin.voiture.edit', compact('voiture'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		$input = $request -> all();
		$image = $input['photo'];

		if (isset($input['image'])) {
			$input['image'] = $this -> uploadImage($input['image']);
			unlink($image);
		}
		$voiture = Voiture::findOrFail($id) -> update($input);
		if ($voiture) {
			return redirect('GestionVoiture') -> with('info', 'Voiture Updated successfully!');
		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		$voiture = Voiture::findOrFail($id);
		$img = $voiture['image'];
		$voiture -> delete();
		unlink($img);
		return redirect() -> back() -> with('success', 'Voiture deleted successfully!');
	}

}
