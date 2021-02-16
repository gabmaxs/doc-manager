<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>CoderDocs - Bootstrap 4 Documentation Template For Software Projects</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bootstrap Documentation Template For Software Developers">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">    
    <link rel="shortcut icon" href="favicon.ico"> 

    <!-- FontAwesome JS-->
    <script defer src="{{ asset('js/fontawesome.js') }}"></script>

    <!-- Theme CSS -->  
    <link href="{{ asset('css/theme.css') }}" rel="stylesheet">

</head> 

<body>    
    <header class="header fixed-top">	    
        <div class="branding docs-branding">
            <div class="container-fluid position-relative py-2">
                <div class="docs-logo-wrapper">
					<button id="docs-sidebar-toggler" class="docs-sidebar-toggler docs-sidebar-visible mr-2 d-xl-none" type="button">
	                    <span></span>
	                    <span></span>
	                    <span></span>
	                </button>
	                <div class="site-logo"><a class="navbar-brand" href="index.html"><img class="logo-icon mr-2" style="width: auto; height: 60px" src="{{ asset('images/public_avatar.jpeg')}}" alt="logo"><span class="logo-text">Dynac<span class="text-alt">curate</span></span></a></div>    
                </div><!--//docs-logo-wrapper-->
	            <div class="docs-top-utilities d-flex justify-content-end align-items-center">
	                <div class="top-search-box d-none d-lg-flex">
		                <form style="display: none" class="search-form">
				            <input type="text" placeholder="Search the docs..." name="search" class="form-control search-input">
				            <button type="submit" class="btn search-btn" value="Search"><i class="fas fa-search"></i></button>
				        </form>
	                </div>
	
					<ul class="social-list list-inline mx-md-3 mx-lg-5 mb-0 d-none d-lg-flex">
						<li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a></li>
			            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
		                <li class="list-inline-item"><a href="#"><i class="fab fa-slack fa-fw"></i></a></li>
		                <li class="list-inline-item"><a href="#"><i class="fab fa-product-hunt fa-fw"></i></a></li>
		            </ul><!--//social-list-->
                    <div class="dropdown">
                        <a class="btn btn-primary dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ $currentVersion->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <h6 class="dropdown-header">Versions</h6>
                            @foreach ($versions as $version)
                                <a class="dropdown-item" href="{{ route('redirect',['version' => $version->id]) }}">{{ substr($version->name,1) }}</a>        
                            @endforeach
                        </div>
                    </div>
	            </div><!--//docs-top-utilities-->
            </div><!--//container-->
        </div><!--//branding-->
    </header><!--//header-->

    <main id="app">
        @yield('content')
    </main>

    <footer class="footer">

	    <div class="footer-bottom text-center py-5">
		    
		    <ul class="social-list list-unstyled pb-4 mb-0">
			    <li class="list-inline-item"><a href="#"><i class="fab fa-github fa-fw"></i></a></li> 
	            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
	            <li class="list-inline-item"><a href="#"><i class="fab fa-slack fa-fw"></i></a></li>
	            <li class="list-inline-item"><a href="#"><i class="fab fa-product-hunt fa-fw"></i></a></li>
	            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f fa-fw"></i></a></li>
	            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram fa-fw"></i></a></li>
	        </ul><!--//social-list-->
	        
	        <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="theme-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
            
	        
	    </div>
	    
    </footer>

    
    <!-- Javascript -->   
    <script src="{{ asset('js/app.js') }}"></script> 

     <!-- Page Specific JS -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.15.8/highlight.min.js"></script>
     <script src="{{ asset('js/highlight-custom.js') }}"></script> 
     <script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
     <script src="{{ asset('js/ekko-lightbox.min.js') }}"></script> 
     <script src="{{ asset('js/theme.js') }}"></script> 
    
    @yield("script")

</body>
</html> 