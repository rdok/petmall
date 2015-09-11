<?php
/**
 * @author  Rizart Dokollari <r.dokollari@gmail.com>
 * @since   11/9/2015
 */
namespace App\Http\Controllers\EShop;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

abstract class BaseController extends Controller
{
	public function __construct()
	{
		! session('locale') ?: App::setLocale(session('locale'));
	}
}