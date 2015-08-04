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
			->see('<title>PetMall &middot; ' . trans('components.initial') . '</title>')
			->see(trans('components.toggle_navigation'))
			->see(route('home') . '">' . trans('components.initial'))
			->see('<a href="' . route('home') . '">' . trans('components.initial') . '</a>')
			->see('<a href="' . route('stores') . '">' . trans('components.stores') . '</a>')
			->see('<a href="' . route('helpful_tips') . '">' . trans('components.helpful_tips') . '</a>')
			->see('<a href="' . route('blog') . '">Blog</a>')
			->see('<a href="' . route('contact') . '">' . trans('components.contact') . '</a>')
			->see('<a href="' . route('auth') . '">' . trans('components.sign_in') . '/' . trans('components.registration') . '</a>')
			->see('<img src="' . url('e-shop/img/logo.png') . '" class="img-responsive" alt="PetMall Logo"/>')
			->see('<input type="text" class="form-control pull-right" placeholder="' . trans('components.search_with_dots') . '" name="q">')
			->see('<button class="btn btn-default btn-sm" type="submit" id="search-button">')
			->see('<img src="' . url('e-shop/img/free_shipping.png') . '"/>')
			->see('<span class="sr-only">' .  trans('components.toggle_navigation') . '</span>')
			->see('<a href="#">' . trans('components.free_shipping') . '</a>')
			->see('<img src="' . url('e-shop/img/cart.png') . '"/>')
			->see(trans('components.my_orders'))
			->see('<img src="' . url('e-shop/img/fb.png') . '"/>')
			->see('Facebook')
			->see('<a href="' . url(route('home')) . '" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">')
			->see('<img src="' . url('e-shop/img/dog.png') . '" alt="' . trans('components.dog_icon') . '"/>' . trans('components.dog'));
	}
}