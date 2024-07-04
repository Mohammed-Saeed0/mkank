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

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse yamm" id="navigation">
            <!-- Your menu items -->
            <ul class="main-nav nav navbar-nav navbar-right">
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="/">Home</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="/about">About</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="/properties">Properties</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="/companies">Companies</a></li>
                <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="contact">Contact</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->

        <!-- Search form -->
        <form class="" id="searchForm" style="display: none;">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="what property do you want" id="searchInput">
            </div>
            <button type="submit" class="btn btn-search btn-default">search</button>
        </form>
    </div><!-- /.container-fluid -->
</nav>
