<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mkank ESTATE | Home page</title>
        <meta name="description" content="GARO is a real-estate template">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <script>
            // Assuming you have a form with id="searchForm" and a container to display results with id="searchResults"

document.getElementById('searchForm').addEventListener('submit', function(event) {
    event.preventDefault();

    let formData = new FormData(this);
    let query = formData.get('query'); // Assuming your search input name is 'query'

    fetch(`/search?query=${encodeURIComponent(query)}`)
        .then(response => response.json())
        .then(data => {
            // Display search results on the page
            let resultsContainer = document.getElementById('searchResults');
            resultsContainer.innerHTML = ''; // Clear previous results

            data.forEach(property => {
                // Example: Create HTML elements to display each property
                let propertyElement = document.createElement('div');
                propertyElement.innerHTML = `<h3>${property.title}</h3><p>${property.description}</p>`;
                resultsContainer.appendChild(propertyElement);
            });

            // Update URL in the browser
            let newUrl = `${window.location.origin}/search?query=${encodeURIComponent(query)}`;
            window.history.pushState({ path: newUrl }, '', newUrl);
        })
        .catch(error => console.error('Error fetching search results:', error));
});

        </script>

        <link rel="stylesheet" href="{{asset('build/assets/front/assets/css/normalize.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/front/assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/front/assets/css/fontello.css')}}">
        <link href="{{asset('build/assets/front/assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet">
        <link href="{{asset('build/assets/front/assets/fonts/icon-7-stroke/css/helper.css')}}" rel="stylesheet">
        <link href="{{asset('build/assets/front/assets/css/animate.css')}}" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="{{asset('build/assets/front/assets/css/bootstrap-select.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/front/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/front/assets/css/icheck.min_all.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/front/assets/css/price-range.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/front/assets/css/owl.carousel.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/front/assets/css/owl.theme.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/front/assets/css/owl.transitions.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/front/assets/css/wizard.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/front/assets/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('build/assets/front/assets/css/responsive.css')}}">

        @yield('cssFiles')


    </head>
    <body>
        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>

        <!-- <div id="preloader">
            <div id="status">&nbsp;</div>
        </div> -->
        <!-- Body content -->

        <!-- //////////////// start top header //////////// -->
        @include('front.includes.top-header')
        <!-- //////////////// end top header //////////// -->


        <!-- //////////////// start main header //////////// -->
        @include('front.includes.main-header')
        <!-- //////////////// end main header //////////// -->


        <!-- //////////////// start content //////////// -->
        @yield('content')
        <!-- //////////////// end content //////////// -->


        <!-- //////////////// start footer //////////// -->
        @include('front.includes.footer')
        <!-- //////////////// end footer //////////// -->





        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                // Toggle search form visibility
                $('#searchIcon').click(function(e) {
                    e.preventDefault();
                    $('#searchForm').toggle(); // Toggle visibility of the search form
                });
            });
        </script>


        <script src="{{asset('build/assets/front/assets/js/modernizr-2.6.2.min.js')}}"></script>

<script src="{{asset('build/assets/front/assets/js/jquery-1.10.2.min.js')}}"></script>
<script src="{{asset('build/assets/front/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('build/assets/front/assets/js/bootstrap-select.min.js')}}"></script>
<script src="{{asset('build/assets/front/assets/js/bootstrap-hover-dropdown.js')}}"></script>

<script src="{{asset('build/assets/front/assets/js/easypiechart.min.js')}}"></script>
<script src="{{asset('build/assets/front/assets/js/jquery.easypiechart.min.js')}}"></script>

<script src="{{asset('build/assets/front/assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('build/assets/front/assets/js/wow.js')}}"></script>

<script src="{{asset('build/assets/front/assets/js/icheck.min.js')}}"></script>
<script src="{{asset('build/assets/front/assets/js/price-range.js')}}"></script>

<script src="{{asset('build/assets/front/assets/js/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>
<script src="{{asset('build/assets/front/assets/js/jquery.validate.min.js')}}"></script>
<script src="{{asset('build/assets/front/assets/js/wizard.js')}}"></script>

<script src="{{asset('build/assets/front/assets/js/main.js')}}"></script>

</body>
</html>
