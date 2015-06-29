<?php namespace App\Http\Controllers;
use App\Helper;
use App\Etsy;
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

		$about = "<p class='card-text'>
	        I grew up in Adelaide, South Australia, and moved to Melbourne, then the Macedon Ranges in Victoria before deciding to move back to Adelaide in 2014.
	    </p>
		<p class='card-text'>
	        I'm happiest when I have art in my life. I'm a programmer/web developer (with a couple of other degrees) but I always end up coming back to art.
	    </p>
		<p class='card-text'>
	        I was a lampwork glass artist for several years, then had a break for a few years while I went back to university to study computer science. I've recently started silversmithing and love it.
	    </p>
		<p class='card-text'>
	        In between (and still), there's been photography, knitting, crochet, sewing... anything that allows me to use my hands and mind to be creative. Even programming can be surprisingly creative.
	    </p>
		<p class='card-text'>
	        I love the sense of accomplishment that comes from turning a pile of raw materials into something (hopefully) beautiful or useful.
	    </p>
		<p class='card-text'>
	        All my items are handmade, by me, in my studio in Adelaide, South Australia. I use recycled/reclaimed materials whenever possible.
	    </p>
		<p class='card-text'>
	        I hope you like my work.
	    </p>";

		$info_500 = \App\Helper::truncate_paragraph($about, 500, "/about", "red");
		$info_250 = \App\Helper::truncate_paragraph($about, 250, "/about", "red");


		// get data for Etsy widget
		$item = new Etsy();
		$listings = $item->getListings();
		$rand = $item->getRandomElement($listings);

		$description = \App\Helper::truncate_paragraph($listings['results'][$rand]['description'], 300, $listings['results'][$rand]['url'], "dark_grey");


		return view('pages.index', ['images'=>$images, 'info_500'=>$info_500, 'info_250'=>$info_250, 'listings'=>$listings, 'rand'=>$rand, 'description'=>$description]);
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

	public function showWidget() {
		$item = new Etsy();
		$listings = $item->getListings();
		$rand = $item->getRandomElement($listings);

		$description = \App\Helper::truncate_paragraph($listings['results'][$rand]['description'], 120, $listings['results'][$rand]['url']);

		return view('pages.widget', ['listings'=>$listings, 'rand'=>$rand, 'description'=>$description]);
	}

	public function phpInfo() {
		return view('pages.phpinfo');
	}
}
