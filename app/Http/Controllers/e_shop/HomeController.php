<?php

/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since 10/9/2015
 */
namespace App\Http\Controllers\e_shop;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Response;

/**
 * Class HomeController
 * @package App\Http\Controllers\e_shop
 */
class HomeController extends Controller
{
	/**
	 * Display the home page
	 *
	 * @return Response
	 */
	public function home()
	{
		return view('guest.home');
	}
}
