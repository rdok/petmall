<?php
/**
 * @author Rizart Dokollari <r.dokollari@gmail.com>
 * @since 11/9/2015
 */
namespace App\Http\Controllers\EShop;

use App\Http\Requests;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Validator;
use Laracasts\Flash\Flash;

class SettingsController extends BaseController
{

	public function lang($locale)
	{
		$validator = Validator::make(compact('locale'), ['locale' => 'required|string|in:en,gr']);

		if ( ! $validator->fails() )
		{
			session(['locale' => $locale]);
		} else
		{
			Flash::error(trans('e_shop.non_existent_lang'));
		}

		return redirect()->back();
	}
}
