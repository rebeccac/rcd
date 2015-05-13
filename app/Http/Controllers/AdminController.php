<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\Photo;
use Input;
use Validator;
use Redirect;
use Session;



use Illuminate\Http\Request;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$photos = Photo::all();
		return view('admin.admin', ['photos'=>$photos]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{

	}

	public function showSelect() {
		$photos = Photo::all();
		return view('admin.select', ['photos'=>$photos]);
	}

	public function upload() {
	  	// get the uploaded file
	  	$file = array('image' => Input::file('image'));
	  	// set up rules
	  	$rules = array(
					   'image' => 'required'
					  );
		//mimes:jpeg,bmp,png and for max size max:10000

	  	// do the validation, pass post data, rules and messages
	  	$validator = Validator::make($file, $rules);
	  	if ($validator->fails()) {
	    	// send back to the page with the input data and errors
	    	return Redirect::to('admin/upload')->withInput()->withErrors($validator);
	  	}
	  	else {
	    	// check file is valid.
	    	if (Input::file('image')->isValid()) {
	        	$destinationPath = 'images'; // upload path
	        	$extension = Input::file('image')->getClientOriginalExtension(); // get image extension
	        	$fileName = rand(11111,99999).'.'.$extension; // renameing image
	        	Input::file('image')->move($destinationPath, $fileName); // upload file to given path

		    	// save photo to DB
		    	$photo = new \App\Models\Photo;
		    	$photo->url = $fileName;
		    	$photo->title = Input::get('title');
		    	$photo->alt = Input::get('alt');
		    	$photo->description = Input::get('description');
		    	$photo->save();

		    	// set name of file as Session variable and redirect back to upload page with success message
		    	Session::set('filename', $fileName);
	        	Session::flash('success', 'Upload successfully');
	        	return Redirect::to('admin/upload');
	    	}
	    	else {
	        	// send back with error message.
	        	Session::flash('error', 'uploaded file is not valid');
	        	return Redirect::to('admin/upload');
	    	}
	  	}
	}
}
