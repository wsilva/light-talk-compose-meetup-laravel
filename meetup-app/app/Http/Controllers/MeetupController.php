<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use \Cache;

use Illuminate\Http\Request;

class MeetupController extends Controller
{

	public function meetup()
	{
		$curtidas = Cache::get('curtidas', 0);
		return view('meetup.index')
			->with('curtidas', $curtidas)
			->with('container', gethostname());
	}

	public function curtir()
	{
		// to be implemented
		return "not implemented yet";
	}

}
