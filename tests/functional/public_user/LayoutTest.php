<?php
/**
 * @author  Rizart Dokollari <r.dokollari@gmail.com>
 * @since   4/8/2015
 */

namespace tests\functional\public_user;


use Illuminate\Support\Facades\App;
use TestCase;

class HomeTest extends TestCase
{

	/** @test */
	public function it_reads_header()
	{
		$this->visit(route('home'))
			->see('<title>PetMall &middot; ' . trans('component.initial') . '</title>')
			->see(trans('components.toggle_navigation'))
			->see(route('home') . '">' . trans('components.initial'))
			->see('<a href="' . route('home') . '">' . trans('components.initial') . '</a>')
			->see('<a href="' . route('stores') . '">' . trans('components.stores') . '</a>')
			->see('<a href="' . route('helpful_tips') . '">' . trans('components.helpful_tips') . '</a>')
			->see('<a href="' . route('blog') . '">Blog</a>')
			->see('<a href="' . route('contact') . '">' . trans('components.contact') . '</a>')
			->see('<a href="' . route('auth') . '">' . trans('components.sign_in') . '/' . trans('components.registration') . '</a>')
			->see('<img src="' . url('e-shop/img/ui/logo.png') . '" class="img-responsive" alt="PetMall Logo"/>')
			->see('<input type="text" class="form-control pull-right" placeholder="' . trans('component.search_with_dots') . '" name="q">')
			->see('<button class="btn btn-default btn-sm" type="submit" id="search-button">')
			->see('<img src="' . url('img/ui/free_shipping.png') . '">')
			->see(trans('components.free_shipping'))
			->see('<img src="' . url('navbar/cart.png') . '">')
			->see(trans('components.my_orders'))
			->see('<img src="' . url('img/ui/fb.png') . '">')
			->see('Facebook')
			->see('<img src="' . url('img/ui/dog.png') . '" alt="' . trans('component.dog_icon') . '">')
			->see(trans('component.dog'))
			->see('<img src="' . url('img/ui/cat.png') . '" alt="' . trans('component.dog_icon') . '">')
			->see(trans('component.dog'));
	}
}