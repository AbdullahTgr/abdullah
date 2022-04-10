<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Web Developer">
    <meta name="author" content="Abdullah Mostafa">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
	<meta property="og:site_name" content="Who Is Abdullah" /> <!-- website name -->
	<meta property="og:site" content="https://spandevelopers.com/" /> <!-- website link -->
	<meta property="og:title" content="Web Developer"/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="Business Development" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="images/details-background.jpg" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="https://spandevelopers.com" /> <!-- where do you want your post to link to -->
	<meta name="twitter:card" content="images/details-background.jpg"> <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>Abdullah Mostafa</title>
    
    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">


    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">


	<link href="css/styles.css" rel="stylesheet">
	 
	<!-- Favicon  -->
    <link rel="icon" href="images/details-background.jpg">
</head>
<body data-spy="scroll" data-target=".fixed-top">



@include('layouts.navbar')      
@yield('content')
@include('layouts.footer')



    
    

    
    	
    <!-- Scripts -->
    <script src="js/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="js/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="js/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
{{-- 
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script> --}}
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


    <script src="js/scripts.js"></script> <!-- Custom scripts -->




@yield('scripts')
</body>
</html>