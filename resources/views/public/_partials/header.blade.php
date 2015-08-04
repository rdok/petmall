<nav class="navbar navbar-default navbar-static-top" id="header">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main"
                aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">{!! trans('components.toggle_navigation') !!}</span> <span class="icon-bar"></span>
            <span class="icon-bar"></span> <span class="icon-bar"></span>
        </button>
    </div>

    <div id="navbar-main" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li>{!! link_to(route('home'), trans('components.initial')) !!}</li>
            <li>{!! link_to(route('stores'), trans('components.stores')) !!}</li>
            <li>{!! link_to(route('helpful_tips'), trans('components.helpful_tips')) !!}</li>
            <li>{!! link_to(route('blog'), 'Blog') !!}</li>
            <li>{!! link_to(route('contact'), trans('components.contact')) !!}</li>
        </ul>
        <ul class="nav navbar-nav navbar-right xs-device">
            <li>{!! link_to(route('auth'), trans('components.sign_in') . '/' . trans('components.registration')) !!}</li>
        </ul>
    </div>
    <!--/.nav-collapse -->

    <div class="row">
        <!-- Brand -->
        <div class="col-sm-4 col-md-4">
            <a href="#"><img src="{!! url('e-shop/img/logo.png')!!}" class="img-responsive" alt="PetMall Logo"/></a>
        </div>

        <!-- Search -->
        <div class="col-sm-3 col-md-3 col-md-pull-1" id="navbar-search">
            <form class="navbar-form" role="search">

                <div class="input-group input-group-sm col-xs-9">

                    <input type="text" class="form-control pull-right" placeholder="{!! trans('component.search_with_dots') !!}" name="q">

                    <div class="input-group-btn">
                        <button class="btn btn-default btn-sm" type="submit" id="search-button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </div>
                </div>
                <button type="button" id="breeds-toggle-btn" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#navbar-breeds" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">{!! trans('components.toggle_navigation') !!}</span>
                    <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
                </button>
            </form>
        </div>

        <!-- Free Shipping -->
        <div class="col-sm-2 col-md-2 hidden-xs col-md-pull-1 center-block text-center" id="free-shipping">
            <a href="#"> <img src="{!! url('e-shop/img/free_shipping.png') !!}"/> </a>

            <div class="caption">
                <a href="#">{!! trans('components.free_shipping') !!}</a>
            </div>
        </div>

        <!-- User's shopping cart -->
        <div id="orders" class="col-sm-1 hidden-xs col-md-2 col-md-pull-0  text-center">
            <div class="row">
                <a href="#"> <img src="{!! url('e-shop/img/cart.png') !!}"/> </a>
            </div>
            <button class="btn btn-default btn-sm" type="submit">
                {!! trans('components.my_orders') !!}
            </button>

        </div>

        <!-- Facebook Logo -->
        <div class="col-sm-1 col-md-1 hidden-xs" id="fb-logo">
            <a href="#"> <img src="{!! url('e-shop/img/fb.png') !!}"/> </a>

            <div class="caption">
                <a href="#">Facebook</a>
            </div>
        </div>

    </div>
    <!-- /.row --><!-- Pet Breeds -->
    <div class="navbar-collapse collapse" id="navbar-breeds">
        <ul id="main-menu" class="sm sm-simple">
            <!-- Credits due http://alijafarian.com/bootstrap-multi-column-dropdown-menu/ -->
            <li>
                <a href="{!! route('home') !!}" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
                    <img src="{!! url('e-shop/img/dog.png') !!}" alt="{!! trans('component.dog_icon') !!}"/>{!! trans('components.dog') !!}
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
                <img src="~/Content/Images/common/navbar/pipe_line.png" alt="Pipeline">
            </li>

            <li>
                {{--<a href="@Url.Action("Index", "Home")" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100">--}}
                {{--<img src="~/Content/Images/common/navbar/cat.png" alt="Cat" />Γάτα--}}
                {{--</a>--}}
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
                <img src="~/Content/Images/common/navbar/pipe_line.png" alt="Pipeline">
            </li>

            <li>
                {{--<a href="@Url.Action("Index", "Home")" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100">--}}
                {{--<img src="~/Content/Images/common/navbar/bird.png" />Πτηνά--}}
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
                <img src="~/Content/Images/common/navbar/pipe_line.png" alt="Pipeline">
            </li>

            <li>
                {{--<a href="@Url.Action("Index", "Home")" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100">--}}
                {{--<img src="~/Content/Images/common/navbar/fish.png" />Ψάρια--}}
                {{--</a>--}}
                <ul>
                    <li><a href="#">Ενυδρεια και βασεις ενυδρειων</a></li>
                    <li><a href="#">Εξοπλισμος ενυδρειων</a></li>
                    <li><a href="#">Βελτιωτικα ενυδρειου και συντηρηση</a></li>
                    <li><a href="#">Διακοσμητικα ενυδρειου</a></li>
                    <li><a href="#">Τροφες</a></li>
                </ul>
            </li>
            <li class="pipe-line">
                <img src="~/Content/Images/common/navbar/pipe_line.png" alt="Pipeline">
            </li>

            <li>
                {{--<a href="@Url.Action("Index", "Home")" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100">--}}
                {{--<img src="~/Content/Images/common/navbar/reptile.png" />Ερπετά--}}
                {{--</a>--}}
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
                <img src="~/Content/Images/common/navbar/pipe_line.png" alt="Pipeline">
            </li>

            <li>
                {{--<a href="@Url.Action("Index", "Home")" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100">--}}
                {{--<img src="~/Content/Images/common/navbar/rabit.png" />Μικρά ζώα--}}
                {{--</a>--}}
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
                <img src="~/Content/Images/common/navbar/pipe_line.png" alt="Pipeline">
            </li>

            <li>
                {{--<a href="@Url.Action("Index", "Home")" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100">--}}
                {{--<img src="~/Content/Images/common/navbar/vet.png" />Κτηνιατρικά--}}
                {{--</a>--}}
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
                <img src="~/Content/Images/common/navbar/pipe_line.png" alt="Pipeline">
            </li>

            <li>
                {{--<a href="@Url.Action("Index", "Home")" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="100">--}}
                {{--<img src="~/Content/Images/common/navbar/book.png" />Βιβλία--}}
                {{--</a>--}}
                <ul></ul>
            </li>
        </ul>
    </div>
</nav>