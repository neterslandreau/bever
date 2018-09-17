<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\Contact;

class ProjectsController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth')->except('contact');
	}

	public function contact(Request $request)
	{
		// dd(request('name'));
		$name = request('name');
		$email = request('email');
		$phone = request('phone');
		$msg = request('message');
		$contact = new Contact($name, $email, $phone, $msg);
		// dd($contact);

		Mail::to(env('CONTACT_MAIL', 'neterslandreau@gmail.com'))
			->send($contact);

	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('projects.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		// dd(request('icon'));
		$this->validate(request(), [
			'name' => 'required',
			'location' => 'required',
			'icon' => 'required',
			'description' => 'required',

		]);

		$type = Project::create([
			'name' => request('name'),
			'location' => request('location'),
			'icon' => request('icon'),
			'description' => request('description'),
		]);

		session()->flash('message', 'Your project has been saved.');

		return redirect()->home();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  string  $slug
	 * @return \Illuminate\Http\Response
	 */
	public function edit(string $slug)
	{
		$project = Project::where(['slug' => $slug])->first();

			if (request()->method() === 'POST') {
				// dd(request('location'));
				 $this->validate(request(), [
					'name' => 'required',
					'location' => 'required',
					'description' => 'required',
					'icon' => 'required',

				]);
				$project = Project::where('slug', $slug)->first();
				$project->name = request('name');
				$project->location = request('location');
				$project->description = request('description');
				$project->icon = request('icon');
				$project->save();
				session()->flash('message', 'The project was successfully editted.');
				return redirect()->home();
			}

		return view('projects.edit', compact('project'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  string  $slug
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(string $slug)
	{
        $project = Project::where('slug', $slug)->first();
        $project->delete();
        session()->flash('message', 'The project has been deleted.');

        return redirect()->home();
	}
}
