<?php
/**
 * @author  Rizart Dokollari <r.dokollari@gmail.com>
 * @since   4/8/2015
 */

namespace tests\functional\guest;


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
			->see('<span class="sr-only">' . trans('components.toggle_navigation') . '</span>')
			->see('<a href="#">' . trans('components.free_shipping') . '</a>')
			->see('<img src="' . url('e-shop/img/cart.png') . '"/>')
			->see(trans('components.my_orders'))
			->see('<img src="' . url('e-shop/img/fb.png') . '"/>')
			->see('Facebook')
			->see('<a id="dropdown-dog" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">')
			->see('<img src="' . url('e-shop/img/dog.png') . '" alt="Dog Icon"/>' . trans('components.dog'))
			->see('<img src="' . url('e-shop/img/pipe_line.png') . '" alt="Dog Pipeline"/>')
			->see('<a id="dropdown-cat" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">')
			->see('<img src="' . url('e-shop/img/cat.png') . '" alt="Cat Icon"/>' . trans('components.cat'))
			->see('<img src="' . url('e-shop/img/pipe_line.png') . '" alt="Cat Pipeline"/>')
			->see('<a id="dropdown-birds" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">')
			->see('<img src="' . url('e-shop/img/bird.png') . '" alt="Bird Icon"/>' . trans('components.birds'))
			->see('<img src="' . url('e-shop/img/pipe_line.png') . '" alt="Birds Pipeline"/>')
			->see('<a id="dropdown-fish" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">')
			->see('<img src="' . url('e-shop/img/fish.png') . '" alt="Fish Icon"/>' . trans('components.fish'))
			->see('<img src="' . url('e-shop/img/pipe_line.png') . '" alt="Fish Pipeline"/>')
			->see('<a id="dropdown-reptile" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">')
			->see('<img src="' . url('e-shop/img/reptile.png') . '" alt="Reptile Icon"/>' . trans('components.reptiles'))
			->see('<img src="' . url('e-shop/img/pipe_line.png') . '" alt="Reptile Pipeline"/>')
			->see('<a id="dropdown-small-animals" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">')
			->see('<img src="' . url('e-shop/img/rabbit.png') . '" alt="Small Animals Icon"/>' . trans('components.small_animals'))
			->see('<img src="' . url('e-shop/img/pipe_line.png') . '" alt="Small Animals Pipeline"/>')
			->see('<a id="dropdown-veterinary" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">')
			->see('<img src="' . url('e-shop/img/vet.png') . '" alt="Veterinary Icon"/>' . trans('components.veterinary'))
			->see('<img src="' . url('e-shop/img/pipe_line.png') . '" alt="Veterinary Pipeline"/>')
			->see('<a id="dropdown-books" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">')
			->see('<img src="' . url('e-shop/img/book.png') . '" alt="Book Icon"/>' . trans('components.books'));
	}

	/** @test */
	public function it_changes_languages()
	{
		App::setLocale('gr');

		$this->visit(route('home'))
			->seePageIs(route('home'))
			->see('<span class="fa fa-language"></span> ' . trans("e_shop.header.gr"))
			->visit(route('lang', ['locale' => 'non-existent']))
			->see(trans('e_shop.non_existent_lang'))
			->see('<span class="fa fa-language"></span> ' . trans("e_shop.header.gr"))
			->click(trans("e_shop.header.en"))
			->see('<span class="fa fa-language"></span> ' . trans("e_shop.header.en"))
			->click(trans("e_shop.header.gr"))
			->see('<span class="fa fa-language"></span> ' . trans("e_shop.header.gr"));
	}
}