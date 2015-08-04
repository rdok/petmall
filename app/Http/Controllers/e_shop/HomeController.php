<?php

namespace App\Http\Controllers\e_shop;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Response;

class HomeController extends Controller
{
	/**
	 * Display the home page
	 *
	 * @return Response
	 */
	public function home()
	{
		return view('public.home');
	}
}
