{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Khoo Academy of Music & Art</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

        <!--Styles-->
    <link rel="stylesheet" href="/css/layout.css" type="text/css">
       
        <!--Bootstrap-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-md navbar-dark bg-dark">
                <a class="navbar-brand" href="/"><img src="/images/KA_Logo.png" width="50" height="50" class="d-inline-block align-top" alt="KA Logo"></a>
                <span class="navbar-text">Khoo Academy</span>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/learn_more">Learn More</a>
                    </li>
                </ul>
            </nav>
        </header>
        @yield('content')

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html> 

{{--         
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <a class="navbar-brand" href="/">
                <img src="/images/KA_Logo.png" width="100" height="100" class="d-inline-block align-top" alt="">
              </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto text-light">
                <li class="nav-item {{Request::path() === '/' ? 'active' : ''}}">
                  <a class="nav-link text-light" href="">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item {{Request::path() === '/about_us' ? 'active' : ''}}">
                  <a class="nav-link text-light" href="#">About Us</a>
                </li>
                <li class="nav-item {{Request::path() === '/' ? 'learn_more' : ''}}">
                    <a class="nav-link text-light" href="/learn_more">Learn More</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
 --}}

 <!DOCTYPE HTML>
<!--
	Epilogue by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Melodify</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header" class="alt">
				<div class="inner">
					<h1>Melodify</h1>
					<p>An algorithmic app to unlock the musical creativity in you!</p>
				</div>
      </header>

    @yield('content')
    
  <!-- Scripts -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/skel.min.js"></script>
  <script src="assets/js/util.js"></script>
  <script src="assets/js/main.js"></script>

  </body>
</html>