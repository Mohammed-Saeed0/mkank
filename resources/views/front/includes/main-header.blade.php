<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="{{ asset('build/assets/front/assets/img/logo.svg') }}" alt=""></a>
            <!-- Add search icon -->
            <a href="#" class="search-icon" id="searchIcon"><i class="fa fa-search"></i></a>
        </div>

        <div class="collapse navbar-collapse yamm" id="navigation">
            {{-- <div class="button navbar-right">
                <div class="btn-group">
                    <button type="button" class="navbar-btn nav-button wow bounceInRight login" onclick="toggleDropdown()" data-wow-delay="0.4s">
                        Login <span class="caret"></span>
                    </button>
                    <ul id="dropdown-menu" class="dropdown-menu">
                        <li><a href="{{ route('customer.login') }}">Customer</a></li>
                        <li><a href="{{ route('company.login') }}">Company</a></li>
                    </ul>
                </div>
            </div> --}}
            <div class="button navbar-right">
                <div class="btn-group">
                    @guest('customer')
                        @guest('company')
                            <button type="button" class="navbar-btn nav-button wow bounceInRight login" onclick="toggleDropdown()" data-wow-delay="0.4s">
                                Login <span class="caret"></span>
                            </button>
                            <ul id="dropdown-menu" class="dropdown-menu">
                                <li><a href="{{ route('customer.login') }}">Customer</a></li>
                                <li><a href="{{ route('company.login') }}">Company</a></li>
                            </ul>
                        @endguest
                    @else
                        @auth('customer')
                            <button type="button" class="navbar-btn nav-button wow bounceInRight login" onclick="toggleDropdown()" data-wow-delay="0.4s">
                                {{ Auth::guard('customer')->user()->name }} <span class="caret"></span>
                            </button>
                            <ul id="dropdown-menu" class="dropdown-menu">
                                <li><a href="{{ route('customer.profile') }}">Profile</a></li>
                                <li>
                                    <a href="{{ route('customer.logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form-customer').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form-customer" action="{{ route('customer.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        @endauth

                        @auth('company')
                            <button type="button" class="navbar-btn nav-button wow bounceInRight login" onclick="toggleDropdown()" data-wow-delay="0.4s">
                                {{ Auth::guard('company')->user()->name }} <span class="caret"></span>
                            </button>
                            <ul id="dropdown-menu" class="dropdown-menu">
                                <li><a href="{{ route('company.profile') }}">Profile</a></li>
                                <li>
                                    <a href="{{ route('company.logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form-company').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form-company" action="{{ route('company.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        @endauth
                    @endguest
                </div>
            </div>






            <ul class="main-nav nav navbar-nav navbar-right">
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="/">Home</a></li>


                <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="/about">About</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="/properties">Properties</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="/companies">Companies</a></li>


                <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="contact">Contact</a></li>
            </ul>
    </div>


        {{-- <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse yamm" id="navigation">
            <!-- Your menu items -->
            <ul class="main-nav nav navbar-nav navbar-right">
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="/">Home</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="/about">About</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="/properties">Properties</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="/companies">Companies</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="contact">Contact</a></li>
            </ul>
        </div><!-- /.navbar-collapse --> --}}
        <!-- Search form -->
        <form  id="searchForm" action="{{ route('properties.search') }}" method="GET" style="display: none;">
            <div class="form-group">
                <input type="text" class="form-control" name="query" placeholder="What property do you want" id="searchInput" required>
            </div>
            <button type="submit" class="btn btn-search btn-default">Search</button>
        </form>
    </div><!-- /.container-fluid -->
</nav>
