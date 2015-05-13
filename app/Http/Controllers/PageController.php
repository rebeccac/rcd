<?php namespace App\Http\Controllers;
use App\Http\Requests\ContactFormRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\Photo;
use Input;
use Eloquent; // ******** This Line *********
use DB;
use Illuminate\Http\Request;

class PageController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	public function create()
	{
		return view('pages.contact');
	}
	public function store(ContactFormRequest $request)
	{
	    \Mail::send('emails.contact',
	        array(
	            'name' => $request->get('name'),
	            'email' => $request->get('email'),
	            'user_message' => $request->get('message')
	        ), function($message)
	    {
	        $message->from(\Request::input('email'));
	        $message->to('rcordingleydesigns@gmail.com', 'Admin')->subject('Rebecca Cordingley Designs Feedback');
	    });

	  return \Redirect::route('contact_store')->with('message', 'Thanks for your feedback!');

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
		//
	}

	public function showAbout() {
		return view('pages.about');
	}

	public function showGallery() {
		$photos = Photo::paginate(12); // equivalent Photo::all()->paginate(12)
		return view('pages.gallery', ['images'=>$photos]);
	}
}
