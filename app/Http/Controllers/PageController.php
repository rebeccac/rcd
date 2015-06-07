<?php namespace App\Http\Controllers;
use App\Helper;
// include(app_path().'/Helper.php');

use App\Http\Requests\ContactFormRequest;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\models\Photo;
use App\models\Image;


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
		$images = Image::all()->take(4);

		$about = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

		$info_330 = \App\Helper::truncate_paragraph($about, 330, "/about");
		$info_120 = \App\Helper::truncate_paragraph($about, 120, "/about");

		return view('pages.index', ['images'=>$images, 'info_330'=>$info_330, 'info_120'=>$info_120]);
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
