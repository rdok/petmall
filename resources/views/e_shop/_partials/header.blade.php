<div class="row" id="header">
    <div class="container">
        <nav class="e-shop-custom-text navbar navbar-default navbar-static-top">
            <div class="row">
                <div class="col-lg-5">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main"
                                aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">{!! trans('e_shop.header.toggle_navigation') !!}</span>
                            <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- Brand -->
                    <div class="row">
                        <a href="#"><img src="{!! url('e-shop/img/logo.png')!!}" class="img-responsive" alt="PetMall Logo"/></a>
                    </div>
                </div>
                <div class="col-lg-7">

                    <div class="row">
                        <div class="col-lg-9 col-lg-push-7">
                            <a href="{!!  route('auth') !!}" class="e-shop-custom-text">{!!  trans('e_shop.header.sign_in') . '/' . trans('e_shop.header.registration') !!}</a>
                        </div>
                        <div class="col-lg-3 pull-right text-center">
                            <div class="dropdown">
                                <button class="dropdown-toggle custom-button" type="button" id="dropDownLangMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <span class="fa fa-language"></span> {!! $locale !!}
                                </button>
                                <ul class="dropdown-menu custom-button" aria-labelledby="dropDownLangMenu">
                                    <li><a href="{!! route('lang', ['locale' => 'en']) !!}">{!! trans('e_shop.header.en') !!}</a></li>
                                    <li><a href="{!! route('lang', ['locale' => 'gr']) !!}">{!! trans('e_shop.header.gr') !!}</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div id="navbar-main" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li>{!! link_to(route('home'), trans('e_shop.header.initial')) !!}</li>
                                <li>{!! link_to(route('stores'), trans('e_shop.header.stores')) !!}</li>
                                <li>{!! link_to(route('helpful_tips'), trans('e_shop.header.helpful_tips')) !!}</li>
                                <li>{!! link_to(route('blog'), 'Blog') !!}</li>
                                <li>{!! link_to(route('contact'), trans('e_shop.header.contact')) !!}</li>
                            </ul>
                        </div>
                        <!--/.nav-collapse -->
                    </div>

                    <div class="row">

                        <!-- Free Shipping -->
                        <div class="col-sm-3 col-md-3 col-md-push-0 hidden-xs center-block text-center">
                            <a href="#"> <img src="{!! url('e-shop/img/free_shipping.png') !!}"/> </a>

                            <div class="caption">
                                <a href="#">{!! trans('e_shop.header.free_shipping') !!}</a>
                            </div>
                        </div>

                        <!-- Facebook Logo -->
                        <div class="col-sm-3 col-md-3 col-md-push-1 hidden-xs">
                            <a href="#"> <img src="{!! url('e-shop/img/fb.png') !!}"/> </a>
                        </div>

                        <!-- User's shopping cart -->
                        <div class="col-sm-4 col-md-4 col-md-push-1 hidden-xs text-center" id="orders">
                            <a href="#"> <img src="{!! url('e-shop/img/cart.png') !!}" style="max-height: 35px;"/> </a>
                            <button class="btn btn-default btn-sm" type="submit">
                                {!! trans('e_shop.header.my_orders') !!}
                            </button>
                        </div>

                    </div>

                </div>
            </div>
            <!-- /.row -->

        </nav>
    </div>
    <div class="row">
        <!-- Pet Breeds -->
        <div class="navbar navbar-collapse collapse navbar-static-top" id="navbar-breeds">

            <ul class="sm sm-simple text-center center-block" id="breeds-toggle-btn">
                <div class="container">
                    <!-- Credits due http://alijafarian.com/bootstrap-multi-column-dropdown-menu/ -->
                    <li>
                        <a id="dropdown-dog" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
                            <img src="{!! url('e-shop/img/dog.png') !!}" alt="Dog Icon"/>{!! trans('components.dog') !!}
                        </a>
                        <ul>
                            <li>
                                <a href="#">Τροφές</a>
                                <ul>
                                    <li><a href="#">Ξηρά τροφή</a></li>
                                    <li><a href="#">Υγή τροφή</a></li>
                                    <li><a href="#">Ωμή διατροφή B.A.R.F</a></li>
                                    <li><a href="#">Λιχουδιές & κόκκαλα</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Αξεσουάρ</a>
                                <ul>
                                    <li><a href="#">Στωματάκια</a></li>
                                    <li><a href="#">Μπολάκια & Ταΐστρες</a></li>
                                    <li><a href="#">Περιλαίμια - Οδηγοί</a></li>
                                    <li><a href="#">Κλουβιά Μεταφοράς - Σπιτάκια</a></li>
                                    <li><a href="#">Πάρκα Εκπαίδευσης</a></li>
                                    <li><a href="#">Ρούχα</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="pipe-line">
                        <img src="{!! url('e-shop/img/pipe_line.png') !!}" alt="Dog Pipeline"/>
                    </li>
                    <li>
                        <a id="dropdown-cat" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
                            <img src="{!! url('e-shop/img/cat.png') !!}" alt="Cat Icon"/>{!! trans('components.cat') !!}
                        </a>
                        <ul>
                            <li>
                                <a href="#">Τροφές</a>
                                <ul>
                                    <li><a href="#">Ξηρα τροφι</a></li>
                                    <li><a href="#">Υγή τροφή</a></li>
                                    <li><a href="#">Λιχουδιές</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Αξεσουάρ</a>
                                <ul>
                                    <li><a href="#">Αμμοι-λεκανες αμμου</a></li>
                                    <li><a href="#">Ειδη μεταφορας</a></li>
                                    <li><a href="#">Ονυχοδρομια</a></li>
                                    <li><a href="#">Παιχνιδια</a></li>
                                    <li><a href="#">Κρεβατακια- καλαθακια</a></li>
                                    <li><a href="#">Μπολ- ταιστρες</a></li>
                                    <li><a href="#">Περιλαιμια</a></li>
                                    <li><a href="#">Ειδη καλοπισμου</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="pipe-line">
                        <img src="{!! url('e-shop/img/pipe_line.png') !!}" alt="Cat Pipeline"/>
                    </li>
                    <li>
                        <a id="dropdown-birds" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
                            <img src="{!! url('e-shop/img/bird.png') !!}" alt="Bird Icon"/>{!! trans('components.birds') !!}
                        </a>
                        <ul>
                            <li>
                                <a href="#">Τροφές</a>
                                <ul>
                                    <li><a href="#">Καναρινια</a></li>
                                    <li><a href="#">Αγριοπουλια</a></li>
                                    <li><a href="#">Παπαγαλακια</a></li>
                                    <li><a href="#">Μεγάλος & Μεσαίος Παπαγάλος</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Αξεσουάρ</a>
                                <ul>
                                    <li><a href="#">Κλουβια</a></li>
                                    <li><a href="#">Παιχνιδια</a></li>
                                    <li><a href="#">Αξεσουάρ κλουβιών</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="pipe-line">
                        <img src="{!! url('e-shop/img/pipe_line.png') !!}" alt="Birds Pipeline"/>
                    </li>
                    <li>
                        <a id="dropdown-fish" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
                            <img src="{!! url('e-shop/img/fish.png') !!}" alt="Fish Icon"/>{!! trans('components.fish') !!}
                        </a>
                        <ul>
                            <li><a href="#">Ενυδρεια και βασεις ενυδρειων</a></li>
                            <li><a href="#">Εξοπλισμος ενυδρειων</a></li>
                            <li><a href="#">Βελτιωτικα ενυδρειου και συντηρηση</a></li>
                            <li><a href="#">Διακοσμητικα ενυδρειου</a></li>
                            <li><a href="#">Τροφες</a></li>
                        </ul>
                    </li>
                    <li class="pipe-line">
                        <img src="{!! url('e-shop/img/pipe_line.png') !!}" alt="Fish Pipeline"/>
                    </li>
                    <li>
                        <a id="dropdown-reptile" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
                            <img src="{!! url('e-shop/img/reptile.png') !!}" alt="Reptile Icon"/>{!! trans('components.reptiles') !!}
                        </a>
                        <ul>
                            <li>
                                <a href="#">Τροφές</a>
                                <ul>
                                    <li><a href="#">Υγή τροφή</a></li>
                                    <li><a href="#">Ωμή διατροφή B.A.R.F</a></li>
                                    <li><a href="#">Λιχουδιές & κόκκαλα</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Αξεσουάρ</a>
                                <ul>
                                    <li><a href="#">Στωματάκια</a></li>
                                    <li><a href="#">Μπολάκια & Ταΐστρες</a></li>
                                    <li><a href="#">Περιλαίμια - Οδηγοί</a></li>
                                    <li><a href="#">Κλουβιά Μεταφοράς - Σπιτάκια</a></li>
                                    <li><a href="#">Πάρκα Εκπαίδευσης</a></li>
                                    <li><a href="#">Ρούχα</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="pipe-line">
                        <img src="{!! url('e-shop/img/pipe_line.png') !!}" alt="Reptile Pipeline"/>
                    </li>
                    <li>
                        <a id="dropdown-small-animals" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
                            <img src="{!! url('e-shop/img/rabbit.png') !!}" alt="Small Animals Icon"/>{!! trans('components.small_animals') !!}
                        </a>
                        <ul>
                            <li>
                                <a href="#">Τροφές</a>
                                <ul>
                                    <li><a href="#">Κουνέλια</a></li>
                                    <li><a href="#">Ινδικά Χοιρίδια</a></li>
                                    <li><a href="#">Chinchila</a></li>
                                    <li><a href="#">Hamster</a></li>
                                    <li><a href="#">Σκίουροι</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Αξεσουάρ</a>
                                <ul>
                                    <li><a href="#">Κλουβια</a></li>
                                    <li><a href="#">Παιχνιδια</a></li>
                                    <li><a href="#">Είδη Καλοπισμού</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="pipe-line">
                        <img src="{!! url('e-shop/img/pipe_line.png') !!}" alt="Small Animals Pipeline"/>
                    </li>
                    <li>
                        <a id="dropdown-veterinary" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
                            <img src="{!! url('e-shop/img/vet.png') !!}" alt="Veterinary Icon"/>{!! trans('components.veterinary') !!}
                        </a>
                        <ul>
                            <li>
                                <a href="#">Συμπληρώματα Διατροφής-Βιταμίνες</a>
                            </li>
                            <li>
                                <a href="#">Αντιπαρασιτικά Φάρμακα</a>
                                <ul>
                                    <li><a href="#">Σπρέι</a></li>
                                    <li><a href="#">Ευδοπαράσιτα</a></li>
                                    <li><a href="#">Αμπούλες</a></li>
                                    <li><a href="#">Περιλαίμια</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Λοιπά Είδη</a>
                            </li>
                        </ul>
                    </li>
                    <li class="pipe-line">
                        <img src="{!! url('e-shop/img/pipe_line.png') !!}" alt="Veterinary Pipeline"/>
                    </li>
                    <li>
                        <a id="dropdown-books" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
                            <img src="{!! url('e-shop/img/book.png') !!}" alt="Book Icon"/>{!! trans('components.books') !!}
                        </a>
                        <ul></ul>
                    </li>
                </div>
            </ul>
        </div>
    </div>
</div>
</div>
