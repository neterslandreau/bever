<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configurable;

class ConfigurablesController extends Controller
{
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
		return view('configurables.create');
	}

 	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$this->validate(request(), [
			'name' => 'required',
			'type' => 'required',

		]);

		$configurable = Configurable::create([
			'name' => request('name'),
			'type' => request('type'),
			'value' => '',
		]);

		$configurable->save();
		session()->flash('message', 'Your configurable has been saved.');

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

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  string  $slug
	 * @return \Illuminate\Http\Response
	 */
	public function edit(string $slug)
	{
		$configurable = Configurable::where(['slug' => $slug])->first();

			if (request()->method() === 'POST') {
				 $this->validate(request(), [
					'name' => 'required',
					'type' => 'required',
					'value' => 'required',

				]);
				$configurable = Configurable::where('slug', $slug)->first();
				$configurable->name = request('name');
				$configurable->type = request('type');

				if ($configurable->type === 'file') {
					$filename = $configurable->slug . '.png';
					request()->file('value')->storeAs('public/icons', $filename);
					$configurable->value = 'public/icons/' . $filename;
				} else {
					$configurable->value = request('value');
				}
		        $configurable->save();

				session()->flash('message', 'The configurable was successfully editted.');
				return redirect()->home();
			}

		return view('configurables.edit', compact('configurable'));

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
        $configurable = Configurable::where('slug', $slug)->first();
        $configurable->delete();
        session()->flash('message', 'The project has been deleted.');

        return redirect()->home();
	}

}
