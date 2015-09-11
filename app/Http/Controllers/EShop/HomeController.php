<?php

/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since 10/9/2015
 */
namespace App\Http\Controllers\EShop;

use App\Http\Requests;
use Illuminate\Http\Response;
use Laracasts\Flash\Flash;

/**
 * Class HomeController
 * @package App\Http\Controllers\e_shop
 */
class HomeController extends BaseController
{
	/**
	 * Display the home page
	 *
	 * @return Response
	 */
	public function home()
	{
		return view('e_shop.home');
	}
}
