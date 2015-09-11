<?php
namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\App;

/**
 * @author  Rizart Dokollari <r.dokollari@gmail.com>
 * @since   11/9/2015
 */
class HeaderComposer
{
	/**
	 * The current language
	 *
	 * @var
	 */
	protected $locale;

	public function __construct()
	{
		$this->locale = trans('e_shop.header.' . App::getLocale());
	}

	/**
	 * Bind data to the view.
	 *
	 * @param  View $view
	 * @return void
	 */
	public function compose(View $view)
	{
		$view->with('locale', $this->locale);
	}
}