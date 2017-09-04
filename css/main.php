<?php

	require_once '../cms/dbconnect.php';

	$companyID = '1';
	
	$companyRequest=mysql_query("SELECT * FROM company WHERE company_id= '$companyID'");
	$companyRow=mysql_fetch_array($companyRequest);	
	$companyTheme = '1';

    header("Content-type: text/css; charset: UTF-8");
    if ($companyTheme == '1') {
    	// MIDNIGHT THEME
	    $brandColor = "#6CB670";
	    $navLinkColor = "#6CB670";
	    $linkHoverColor = "#6CB670";
	    $buttonColor = "#6CB670";
	    $bodyBackgroundColor = "#333439";
	    $navbarBackgroundColor = "#2B2C30";
	    $navbarSelectedColor = "#2f3238";
	    $bodyCopyColor = "#ddd";
	    $defaultCopyColor = "#fff";
	    $headlineColor = "#fff";
	    $lightBackgroundColor = "#3f4045";
	    $mediumBackgroundColor = "#2F3035";
	    $darkBackgroundColor = "#2b2c30";
	    $objectBackgroundColor = "#2F383D";
	    $borderColor = "#4e595f";  
	    $titleFont = "http://fonts.googleapis.com/css?family=Oswald:600,400,300";
	    $bodyFont = "http://fonts.googleapis.com/css?family=Ubuntu:400,300";
	    $bodyFontFamily = "'Ubuntu', 'Arial', sans-serif";
	    $titleFontFamily = "Oswald, sans-serif";
	    
    }elseif ($companyTheme == '2') {
    	// CLEAR SKIES THEME
        $brandColor = "#fff";
        $navLinkColor = "#CA317E";
        $linkHoverColor = "#CA317E";
        $buttonColor = "#CA317E";
        $bodyBackgroundColor = "#1bacc0";
        $navbarBackgroundColor = "#148a9a";
        $navbarSelectedColor = "#14a1b5";
        $bodyCopyColor = "#fff";
        $defaultCopyColor = "#bbedf2";
        $headlineColor = "#bbedf2";
        $lightBackgroundColor = "#31b9cc";
        $mediumBackgroundColor = "#14a1b5";
        $darkBackgroundColor = "#148a9a";
        $objectBackgroundColor = "#1599ab";
        $borderColor = "#31b9cc"; 
        $titleFont = "http://fonts.googleapis.com/css?family=Catamaran:600,400,300";
        $bodyFont = "http://fonts.googleapis.com/css?family=Roboto:400,300";
        $bodyFontFamily = "'Roboto', 'Arial', sans-serif";
        $titleFontFamily = "'Catamaran', sans-serif";
    }elseif ($companyTheme == '3') {
    	// THAILAND LOTUS THEME
    	$brandColor = "#f7bcd0";
    	$navLinkColor = "#f7bcd0";
    	$linkHoverColor = "#f7bcd0";
    	$buttonColor = "#f7bcd0";
    	$bodyBackgroundColor = "#ab1a58";
    	$navbarBackgroundColor = "#85124e";
    	$navbarSelectedColor = "#710e42";
    	$bodyCopyColor = "#ddd";
    	$defaultCopyColor = "#fff";
    	$headlineColor = "#fff";
    	$lightBackgroundColor = "#d0246e";
    	$mediumBackgroundColor = "#85124e";
    	$darkBackgroundColor = "#710e42";
    	$objectBackgroundColor = "#710e42";
    	$borderColor = "#d0246e"; 
    	$titleFont = "http://fonts.googleapis.com/css?family=Monstserrat:600,400,300";
    	$bodyFont = "http://fonts.googleapis.com/css?family=Merriweather:400,300";
    	$bodyFontFamily = "'Merriweather', 'Georgia', serif";
    	$titleFontFamily = "Monstserrat, sans-serif";
    }else {    	
    	// BRIGHTWHITE THEME
    	$brandColor = "#f21058";
    	$navLinkColor = "#fff";
    	$linkHoverColor = "#f21058";
    	$buttonColor = "#f7bcd0";
    	$bodyBackgroundColor = "#efd4c9";
    	$navbarBackgroundColor = "#f25858";
    	$navbarSelectedColor = "#d64d4c";
    	$bodyCopyColor = "#282828";
    	$defaultCopyColor = "#333333";
    	$headlineColor = "#fff";
    	$lightBackgroundColor = "#efd4c9";
    	$mediumBackgroundColor = "#f25858";
    	$darkBackgroundColor = "#d64d4c";
    	$objectBackgroundColor = "#6a5346";
    	$borderColor = "#f25858"; 
    	$titleFont = "http://fonts.googleapis.com/css?family=Oswald:400,300";
    	$bodyFont = "http://fonts.googleapis.com/css?family=Ubuntu:400,300";
    	$bodyFontFamily = "'Ubuntu', 'Arial', sans-serif";
    	$titleFontFamily = "Oswald, sans-serif";
    }
    
    
    // LIGHT THEME
?>

<?php echo '@import url("' . $titleFont . '");' ?>
<?php echo '@import url("' . $bodyFont . '");' ?>

/*=================================================================
	Basic Setup for Company theme: <?php echo $companyTheme ?>
==================================================================*/

body {
    background-color: <?php echo $bodyBackgroundColor ?>;
	font-family: <?php echo $bodyFontFamily ?>;
    line-height: 1.5;
    color: <?php echo $bodyCopyColor ?>;
}

ol, ul {
    margin: 0;
    padding: 0;
    list-style: none;
}

figure {
    margin: 0;
}

a {
    color: <?php echo $defaultCopyColor ?>;
    	
	-webkit-transition: all .3s ease-in 0s;
	   -moz-transition: all .3s ease-in 0s;
		 -o-transition: all .3s ease-in 0s;
			transition: all .3s ease-in 0s;
}

iframe {
    border: 0;
}

a, a:focus, a:hover {
    text-decoration: none;
    outline: 0;
}


p a, p a:focus, p a:hover {
    text-decoration: underline;
    outline: 0;
}

a:focus, a:hover {
    color: <?php echo $linkHoverColor ?>;
}

h1, h2, h3, h4, h5, h6 {
    font-family: <?php echo $titleFontFamily ?>;
    font-weight: 400;
}

dt{
	padding:30px 0px 10px;
	font-weight: 600;
	font-size: 1.5em;
}

dd{
	padding: 0px 0 10px;
	width: auto;
}

.kill-margin-bottom {
	margin-bottom: 0 !important;
}

.btn {
    background-color: transparent;
    color: <?php echo $defaultCopyColor ?>;
    text-decoration: none;
    padding: 10px 30px;
    border-radius: 5px !important;
    margin-top: 15px;
    font-family: <?php echo $titleFontFamily ?>;
	
	-webkit-transition: all .5s ease-in 0s;
	   -moz-transition: all .5s ease-in 0s;
		 -o-transition: all .5s ease-in 0s;
			transition: all .5s ease-in 0s;
}

.btn:focus {
	color: <?php echo $bodyCopyColor ?>;
}

.btn-green {
    background-color: <?php echo $buttonColor ?>;
}

.btn-green:focus, 
.btn-green:hover {
    background-color: <?php echo $objectBackgroundColor ?>;
	color: <?php echo $defaultCopyColor ?>;
}

.btn-transparent {
	border: 1px solid <?php echo $borderColor ?>;
	border-radius: 5px !important;
}

.btn-transparent:focus {
    background-color: transparent;
    border-color: <?php echo $borderColor ?>;
}

.btn-transparent:hover {
    background-color: <?php echo $buttonColor ?>;
	border: 1px solid transparent;
    color: <?php echo $defaultCopyColor ?>;
}

.form-control {
	background-color: <?php echo $objectBackgroundColor ?>;
	border-radius: 5px;
	padding: 5px 10px;
	border: 0 none;
	color: <?php echo $bodyCopyColor ?>;
}

.form-control:focus {
	box-shadow: 0 0 0;
}

.form-control::-webkit-input-placeholder { /*  Chrome, Safari, Opera  */
   color: <?php echo $bodyCopyColor ?>;
}

.form-control:-moz-placeholder { /* Firefox 18- */
   color: <?php echo $bodyCopyColor ?>;  
}

.form-control::-moz-placeholder {  /* Firefox 19+ */
   color: <?php echo $bodyCopyColor ?>;  
}

.form-control:-ms-input-placeholder {  /*  Internet Explorer  */
   color: <?php echo $bodyCopyColor ?>;  
}


#loading-mask {
    background: <?php echo $lightBackgroundColor ?>;
    height: 100%;
    left: 0;
    opacity: 1;
    filter: alpha(opacity=100);
    position: fixed;
    text-align: center;
    top: 0;
    width: 100%;
    z-index: 999999999;
}

.loading-img {
    height: 100%;
    left: 0;
    position: fixed;
    top: 50%;
    width: 100%;
}

.border {
    border-top: 1px solid <?php echo $defaultCopyColor ?>;
    height: 1px;
    margin: 15px auto 0;
    position: relative;
    width: 35%;
}

.border:before {
    background-color: <?php echo $defaultCopyColor ?>;
    border: 1px ridge <?php echo $defaultCopyColor ?>;
    content: "";
    height: 10px;
    left: 50%;
    margin-left: -20px;
    position: absolute;
    top: -5px;
    width: 40px;
}

.title {
    padding-bottom: 60px;
}

.title h2 {
    text-transform: uppercase;
    font-weight: 600;
    font-size: 3em;
    color: <?php echo $headlineColor ?>;
}

.color {
    color: <?php echo $navLinkColor ?>;
}

.sub-title {
    padding: 0 0 50px;
}

.sub-title > h3 {
    border-left: 3px solid <?php echo $bodyCopyColor ?>;
    border-right: 3px solid <?php echo $bodyCopyColor ?>;
    display: inline-block;
    padding: 5px 25px;
    text-transform: uppercase;
}

.btn.active:focus, .btn:active:focus, .btn:focus {
    outline: 0;
}

.bg-one {
    background-color: <?php echo $bodyBackgroundColor ?>;
}

.bg-two {
    background-color: <?php echo $darkBackgroundColor ?>;
}

.parallax-section {
	background-attachment: fixed;
	background-position: center center;
	background-repeat: no-repeat;
	background-size: cover;
}


/*=================================================================
	Home Slider
==================================================================*/

#home {
    position: relative;
}

#slitSlider .carousel-caption {
	padding: 0;
    display: table;
    height: 100%;
    width: 100%;
    min-height: 100%;
    left: 0;
    top: 0;
    z-index: 11;
	background-color: rgba(0,0,0,.5);
}

#slitSlider .carousel-caption a {
    font-size: 18px;
}

#slitSlider .carousel-caption > div {
    vertical-align: middle;
    display: table-cell;
}

#slitSlider .carousel-caption h2 {
    color: <?php echo $defaultCopyColor ?>;
    font-family: <?php echo $titleFontFamily ?>;
    font-size: 70px;
    font-weight: 700;
    margin-bottom: 40px;
    text-transform: uppercase;
}

#slitSlider .carousel-caption h3 {
    color: <?php echo $defaultCopyColor ?>;
    font-family: <?php echo $titleFontFamily ?>;
    font-size: 40px;
    font-weight: 700;
    margin-bottom: 59px;
}



/*=================================================================
	Navigation
==================================================================*/

.navbar-inverse {
	background-color: <?php echo $navbarBackgroundColor ?>;
	width: 100%;
	z-index: 99;
}

.navbar {
  border-bottom: 1px solid <?php echo $borderColor ?>;
  margin-bottom: 0;
}

.navbar-brand {
	height: auto;
	padding: 8px 0;
}

.navbar-brand h1 {
	margin: 0;
}

.navbar-inverse .navbar-nav > li > a {
    color: <?php echo $defaultCopyColor ?>;
    font-size: 1em;
    text-transform: uppercase;
    font-family: <?php echo $titleFontFamily ?>;
    line-height: 26px;
    padding: 20px 15px;

	-webkit-transition: background .5s ease-in-out 0s;
	   -moz-transition: background .5s ease-in-out 0s;
		 -o-transition: background .5s ease-in-out 0s;
			transition: background .5s ease-in-out 0s;
}

.navbar-inverse .navbar-nav > li.current > a {
    color: <?php echo $navLinkColor ?>;
    background-color: <?php echo $navbarSelectedColor ?>;
}

.navbar-inverse .navbar-nav > li > a:hover {
    color: <?php echo $navLinkColor ?>;
}


/*=================================================================
	About us section
==================================================================*/

#about {
    padding: 70px 0;
}

.icon-box {
	position: relative;
	width: 160px; 
	height: 92.38px;
	background-color: transparent;
	margin: 46.19px auto 60px;
	padding: 20px 0;
	border-left: solid 3px <?php echo $bodyCopyColor ?>;
	border-right: solid 3px <?php echo $bodyCopyColor ?>;
	
	-webkit-transform: translateZ(0px);
	   -moz-transform: translateZ(0px);
		-ms-transform: translateZ(0px);
		 -o-transform: translateZ(0px);
			transform: translateZ(0px);

	-webkit-transition-duration: 0.3s;
	   -moz-transition-duration: 0.3s;
		 -o-transition-duration: 0.3s;
			transition-duration: 0.3s;

	-webkit-transition-property: transform;
	   -moz-transition-property: transform;
		 -o-transition-property: transform;
			transition-property: transform;
}

.icon-box:hover {
	-webkit-transform: translateY(-10px);
	   -moz-transform: translateY(-10px);
		-ms-transform: translateY(-10px);
		 -o-transform: translateY(-10px);
			transform: translateY(-10px);
}

.icon-box:before,
.icon-box:after {
	content: "";
	position: absolute;
	z-index: 1;
	width: 113.14px;
	height: 113.14px;
	background-color: inherit;
	left: 20.4315px;

	-webkit-transform: scaleY(0.5774) rotate(-45deg);
	   -moz-transform: scaleY(0.5774) rotate(-45deg);
		-ms-transform: scaleY(0.5774) rotate(-45deg);
		 -o-transform: scaleY(0.5774) rotate(-45deg);
			transform: scaleY(0.5774) rotate(-45deg);
}

.icon-box:before {
	top: -56.5685px;
	border-top: solid 4.2426px <?php echo $bodyCopyColor ?>;
	border-right: solid 4.2426px <?php echo $bodyCopyColor ?>;
}

.icon-box:after {
	bottom: -56.5685px;
	border-bottom: solid 4.2426px <?php echo $bodyCopyColor ?>;
	border-left: solid 4.2426px <?php echo $bodyCopyColor ?>;
}

/*=================================================================
	Our Benefits
==================================================================*/

#main-features {
    padding: 70px 0;
}


/*=================================================================
	Item counter section
==================================================================*/

#counter {
    background-image: url(../img/parallax/coachella-2.jpg);
    padding: 70px 0;
}

.counters-item {
    border: 1px solid <?php echo $borderColor ?>;
    padding-bottom: 30px;
}

.counters-item > div {
    margin: 10px 0;
}

.counters-item span {
    display: inline;
    font-family: <?php echo $titleFontFamily ?>;
    font-size: 1.75em;
    line-height: 50px;
}

.counters-item i {
    margin-bottom: 15px;
}

.counters-item h3 {
	font-family: <?php echo $bodyFontFamily ?>;
	font-size: 1.125em !important;
	margin: 0;
}


/*=================================================================
	Services section
==================================================================*/

#services {
	background-image: url("../img/parallax/arab-spring.jpg");
	padding-bottom: 100px;
	padding-top: 80px;
}

#services .title {
    padding-bottom: 125px;
}

.service-block {
    padding: 50px 20px;
    border-right: 1px solid <?php echo $borderColor ?>;
    border-bottom: 1px solid <?php echo $borderColor ?>;
    border-left: 1px solid <?php echo $navbarBackgroundColor ?>;
    border-top: 1px solid <?php echo $navbarBackgroundColor ?>;
    margin-bottom: 40px;
	
	-webkit-box-shadow: 1px 2px 5px rgba(0, 0, 0, 0.5), 10px 10px 5px rgba(0, 0, 0, .7);
	   -moz-box-shadow: 1px 2px 5px rgba(0, 0, 0, 0.5), 10px 10px 5px rgba(0, 0, 0, .7);
			box-shadow: 1px 2px 5px rgba(0, 0, 0, 0.5), 10px 10px 5px rgba(0, 0, 0, .7);
}

.service-icon {
    margin-bottom: 40px;
}

.service-block h3 {
	text-transform: uppercase;
}

/*=================================================================
	Our Team
==================================================================*/

#our-team {
	background-image: url("../img/parallax/womens-march.jpg");
	padding-bottom: 100px;
	padding-top: 80px;
}

.about-team {
    color: <?php echo $defaultCopyColor ?>;
    padding-bottom: 40px;
}

.about-team .title h1 {
    color: <?php echo $defaultCopyColor ?>;
}

.team-mate {
	background-color: <?php echo $navbarBackgroundColor ?>;
	border: 1px solid <?php echo $borderColor ?>;
}

.member-photo {
	overflow: hidden;
	position: relative;
}

.member-photo img {
	-webkit-transition: all 0.6s ease 0s;
	   -moz-transition: all 0.6s ease 0s;
		 -o-transition: all 0.6s ease 0s;
			transition: all 0.6s ease 0s;
}

.member-photo:hover img {
	-webkit-transform: scale(1.2);
	   -moz-transform: scale(1.2);
		-ms-transform: scale(1.2);
		 -o-transform: scale(1.2);
			transform: scale(1.2);
}

.member-title {
	border-bottom: 1px solid <?php echo $borderColor ?>;
	padding: 10px 15px;
}


.member-photo .mask {
    background-color: rgba(43, 44, 48, 0.8);
    position: absolute;
    text-align: center;
    height: 100%;
    width: 100%;
    left: 0;
    top: 0;
	
	opacity: 0;
	filter: alpha(opacity=0);
	
	-webkit-transition: all 600ms ease-out 0s;	
	   -moz-transition: all 600ms ease-out 0s;
		 -o-transition: all 600ms ease-out 0s;
		    transition: all 600ms ease-out 0s;
		  
	-webkit-transform: rotateY(180deg) scale(0.5,0.5);
	   -moz-transform: rotateY(180deg) scale(0.5,0.5);
		-ms-transform: rotateY(180deg) scale(0.5,0.5);
		 -o-transform: rotateY(180deg) scale(0.5,0.5);
			transform: rotateY(180deg) scale(0.5,0.5);	
}

.member-photo:hover .mask {
    cursor: pointer;
	opacity: 1;
	filter: alpha(opacity=100);
	
	-webkit-transform: rotateY(0deg) scale(1,1);
	   -moz-transform: rotateY(0deg) scale(1,1);
		-ms-transform: rotateY(0deg) scale(1,1);
		 -o-transform: rotateY(0deg) scale(1,1);
		    transform: rotateY(0deg) scale(1,1);
}

.team-mate h3 {
	font-family: <?php echo $bodyFontFamily ?>;
	font-size: 1.5em;
	margin: 0 0 5px;
}

.member-info {
	padding: 15px;
}

.mask ul {
    text-align: center;
    position: relative;
    top: 125px;
}

.mask ul li {
    display: inline-block;
    margin-right: 15px;
}

.mask ul li a {
    border: 1px solid <?php echo $bodyCopyColor ?>;
    border-radius: 4px;
    color: <?php echo $defaultCopyColor ?>;
    display: block;
    font-size: 20px;
    height: 35px;
    line-height: 35px;
    text-align: center;
    width: 35px;
}

.mask ul li a:hover {
    background-color: <?php echo $brandColor ?>;
    border: 1px solid transparent;
}

/*=================================================================
	Pricing section
==================================================================*/

#pricing {
    padding: 70px 0;
}

.pricing {
	background-color: <?php echo $darkBackgroundColor ?>;
}

.price-title {
  background-color: <?php echo $navbarBackgroundColor ?>;
  padding: 30px 0 20px;
}

.price-title > h3 {
    color: <?php echo $brandColor ?>;
    font-family: <?php echo $titleFontFamily ?>;
    font-weight: 700;
    margin: 0 0 10px;
    text-transform: uppercase;
}

.price-title > p {
    font-size: 18px;
    font-weight: 400;
}


.price-title .value {
	color: <?php echo $brandColor ?>;
	font-size: 30px;
}

.pricing li {
    border-top: 2px solid <?php echo $lightBackgroundColor ?>;
    font-weight: 400;
    padding: 10px 0;
}

.pricing li:last-child {
    border-bottom: 2px solid <?php echo $lightBackgroundColor ?>;
}

.pricing li:nth-child(2n) {
    background-color: <?php echo $mediumBackgroundColor ?>;
}

.pricing a.btn {
    text-transform: uppercase;
	margin: 20px 0;
}

/*=================================================================
	Latest Posts
==================================================================*/

#blog {
    padding-bottom: 110px;
    padding-top: 70px;
}

.note {
	background-color: <?php echo $bodyBackgroundColor ?>;
	border: 1px solid <?php echo $borderColor ?>;
}

.note .media-wrapper {
	border-bottom: 1px solid <?php echo $borderColor ?>;
}

.note .excerpt {
	padding: 0 10px 20px;
}

.note .excerpt h3 {
	font-size: 20px;
	line-height: 1.5;
	text-transform: capitalize;
}


/*=================================================================
	Contact
==================================================================*/

#contact-us {
    padding: 70px 0 0;
    background-color: <?php echo $darkBackgroundColor ?> !important;
}

.contact-form {
	margin-bottom: 40px;
}

.contact-form .form-control {
	background-color: transparent;
	border: 1px solid <?php echo $borderColor ?>;
	height: 38px;
}

.contact-form input:hover,
.contact-form textarea:hover,
#contact-submit:hover {
    border-color: <?php echo $navLinkColor ?>;
}

#contact-submit {
	border: 1px solid <?php echo $navLinkColor ?>;
	padding: 12px 0;
	width: 100%;
	margin: 0;
}

.contact-form textarea.form-control {
    padding: 10px;
    height: 120px;
}
.contact-info p {
	margin-bottom: 25px;
}

.con-info {
    margin-bottom: 20px;
}

.con-info i,
.con-info span {
    float: left;
}

.con-info span {
	margin: -5px 0 0 15px;
}

.error {
    display: none;
    padding: 10px;
    color: #D8000C;
    border-radius: 4px;
    font-size: 13px;
    background-color: #FFBABA;
}

.success {
    background-color: <?php echo $brandColor ?>;
    border-radius: 4px;
    color: <?php echo $defaultCopyColor ?>;
    display: none;
    font-size: 13px;
    padding: 10px;
}


/*=================================================================
	Footer section
==================================================================*/

.copyright {
    padding: 20px 0;
    color: <?php echo $defaultCopyColor ?>;
}

.copyright > img {
    margin-bottom: 15px;
}

.scrollUp {
    font-family: <?php echo $bodyFontFamily ?> !important;
    color: <?php echo $defaultCopyColor ?>;
    padding: 8px 12px;
}

.scrollUp:hover {
    background-color: <?php echo $brandColor ?>;
    color: <?php echo $defaultCopyColor ?>;
}


/*=================================================================
	Blog Page
==================================================================*/


#blog-banner {
	padding-bottom: 100px;
    padding-top: 70px;
}

.blog-icon {
    border-radius: 50%;
    color: <?php echo $brandColor ?>;
    display: inline-block;
    padding: 16px 20px;
}

.blog-title h1 {
    text-transform: uppercase;
}

#blog-page {
	margin: 0 0 40px;
}

.post-item {
	border-width: 0 !important;
	border-style: none;
}

.post-item .entry {
	border: 0 !important;
	margin-bottom: 30px;
}

.entry .post-excerpt {
	padding: 0 20px;
}

#post-thumb .owl-prev,
#post-thumb .owl-next {
    padding: 5px 17px;
    position: absolute;
    top: 45%;

	-webkit-transition: all .5s ease-in 0s;
	   -moz-transition: all .5s ease-in 0s;
		 -o-transition: all .5s ease-in 0s;
			transition: all .5s ease-in 0s;
}

#post-thumb .owl-prev {
    left: -45px;
}

#post-thumb .owl-next {
    right: -45px;
}

#post-thumb:hover .owl-prev {
    left: 0;
}

#post-thumb:hover .owl-next {
    right: 0;
}

#post-thumb {
    overflow-x: hidden;
}

#post-thumb .owl-buttons {
    color: <?php echo $defaultCopyColor ?>;
}

.post-excerpt .more {
    margin-top: 20px;
}

.post-excerpt .more a {
    display: inline-block;
    font-size: 13px;
    padding: 10px 25px;
}

.post-excerpt .more a:hover {
    background-color: <?php echo $brandColor ?>;
    color: <?php echo $defaultCopyColor ?>;
}

aside.widget {
    margin-bottom: 25px;
}

.widget-content .tab-content {
	background-color: <?php echo $objectBackgroundColor ?>;
	padding: 20px;
}

.tab-pane.active .clearfix:first-child {
	margin-bottom: 25px;
}

.widget-content .tag {
	background-color: <?php echo $objectBackgroundColor ?>;
	color: <?php echo $defaultCopyColor ?>;
	display: inline-block;
	margin-bottom: 10px;
	margin-right: 5px;
	padding: 5px 13px;
}

.widget-content .tag:hover {
    background-color: <?php echo $brandColor ?>;
    color: <?php echo $defaultCopyColor ?>;
}


.form-group:last-child,
.form-group:last-child input {
  margin: 0;
}
                
                
.featured_video {
	position: relative;
	padding-bottom: 56.25%;
	padding-top: 25px;
  	height: 0;
}

.featured_video iframe {
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
}

h4{
	padding: 60px 0 0;
}

dt{
	padding: 15px 0 5px;
	font-size: 1.5em;
	color: <?php echo $navLinkColor ?>;
}

dd{
	padding-bottom: 10px 0 20px 10px;
}

.post-item dl.toc{
	padding-top: 0px !important;
}


/*=================================================================
	Media Queries
==================================================================*/

/*============================================================
	For Small Desktop
==============================================================*/

@media (min-width: 980px) and (max-width: 1150px) {

    .parallax-section {
        background-position: center top !important;
        background-attachment: scroll !important;
    	padding-bottom: 40px !important;
    	padding-top: 70px !important;
    }
    .navbar-inverse .navbar-nav > li > a {
		padding: 30px 10px;
	}
	.navbar-inverse .navbar-nav > li {
		padding-right: 0;
	}
	.navbar-inverse.smaller ul li a {
		padding: 20px 11px;
	}
    #slitSlider .carousel-caption h2 {
        font-size: 2em !important;
        padding: 0 5px;
    }
	.about {
		margin-bottom: 20px;
	}
	.about:last-child {
		margin-bottom: 0;
	}
	.icon-box {
	  padding: 25px 20px;
	}
	.device {
		height: 436px;
	}
	.counters-item {
		margin-bottom: 25px;
	}
	.counters-item > div {
		margin: 10px 0 20px;
	}
	.counters-item h3 {
		font-size: 23px;
	}
    .team-mate {
        margin-bottom: 30px;
    }
    .team-mate > h4 {
        margin-bottom: 10px;
    }
    .team-mate img {
    	margin: 0 auto;
    }
    .member-info ul li {
        margin-right: 10px;
    }
    .title h2 {
        text-transform: uppercase;
        font-weight: 700;
        font-size: 28px;
        color: <?php echo $defaultCopyColor ?>;
    }
    #our-team{
    	background-image: url("../img/parallax/coachella-2-m.jpg");
        background-image: none; 
    	background-color: <?php echo $darkBackgroundColor ?>;
    }
    #services{
    	background-image: url("../img/parallax/arab-spring-m.jpg"); 
    	background-color: <?php echo $bodyBackgroundColor ?>;
    }
    #main-features{
        background-image: none !important;
    	background-color: <?php echo $darkBackgroundColor ?>;
    }
	#contact-us {
		background-size: inherit;
	}
	#contact-form {
		width: 90%;
	}
	.mask ul {
        top: 85px;
    }

    .mask ul li {
        margin: 0 5px;
    }


}

/*============================================================
	Tablet (Portrait) Design for a width of 768px
==============================================================*/

@media (min-width: 768px) and (max-width: 979px) {

    .parallax-section {
        background-position: center top !important;
        background-attachment: scroll !important;
    	padding-bottom: 40px !important;
    	padding-top: 70px !important;
    }
    .navbar-inverse .navbar-nav li a {
    	padding: 20px 10px;
    	font-size: 1.25em;
    }
    .navbar-inverse .navbar-nav>li>a {
    	padding: 30px 10px;
    }
    .navbar-inverse.smaller .navbar-nav>li>a {
    	padding: 20px 10px;
    }
    .navbar-inverse .navbar-nav>li {
        padding-right: 0;
    }
    #slitSlider .carousel-caption h2 {
        font-size: 50px;
    }
    .btn {
    	font-size: 1.125em;
    }
	.icon-box {
	  margin: 0 auto;
	  width: 60%;
	}
	.about-content {
	  margin: 0 auto 40px;
	  padding: 0;
	  width: 60%;
	}
    .device {
        margin-bottom: 30px;
    }
    .device img {
        margin: 0 auto;
    }
    #counter {
        padding-bottom: 50px;
    }
    .counters-item {
        margin-bottom: 30px;
    }
    .service-block {
        margin: 0 auto 40px;
        width: 310px;
    }
    .team-mate {
        margin: 0 auto 30px;
        width: 280px;
    }
    .team-mate>img {
        display: inline-block;
    }
    .pricing {
        margin: 0 auto 30px;
        width: 300px;
    }
    .title h2 {
        text-transform: uppercase;
        font-weight: 700;
        font-size: 28px;
        color: <?php echo $defaultCopyColor ?>;
    }
    #our-team{
    	background-image: url("../img/parallax/coachella-2-m.jpg");
        background-image: none; 
    	background-color: <?php echo $bodyBackgroundColor ?>;
    }
    #services{
    	background-image: url("../img/parallax/arab-spring-m.jpg"); 
    	background-color: <?php echo $bodyBackgroundColor ?>;
    }
    #main-features{
        background-image: none !important;
    	background-color: <?php echo $darkBackgroundColor ?>;
    }
    #contact-us {
        background-position: 50% 0 !important;
        background-size: inherit;
    }
    #contact-form {
        width: 90%;
    } 
    .counters-item h3 {
    	font-family: <?php echo $bodyFontFamily ?>;
    	font-size: 1.5em;
    	margin: 0;
    }
    .wrap-about {
        margin: 0 0 75px;
    }
    .about-content {
        margin: 0 auto;
        width: 60%;
    }
    .note {
        margin-bottom: 30px;
        font-size: 2em;
    }

}


/*============================================================
	Mobile (Portrait) Design for a width of 320px
==============================================================*/

@media only screen and (max-width: 767px) {

	/* parallax section */
    .parallax-section {
        background-position: center top !important;
        background-attachment: scroll !important;
    	padding-bottom: 40px !important;
    	padding-top: 70px !important;
    }
    h1 {
        font-size: 30px;
    }
    .btn {
    	font-size: 1.125em;
    }
    .title h2 {
        text-transform: uppercase;
        font-weight: 700;
        font-size: 28px;
        color: <?php echo $defaultCopyColor ?>;
    }
    #our-team{
        background-image: url("../img/parallax/tornado-m.jpg"); 
    	background-color: <?php echo $lightBackgroundColor ?>;
    }
	#services{
    	background-image: url("../img/parallax/arab-spring-m.jpg"); 
    	background-color: <?php echo $bodyBackgroundColor ?>;
    }
    #main-features{
        background-image: none !important;
    	background-color: <?php echo $darkBackgroundColor ?>;
    }
    .carousel-caption img {
        width: 70%;
    }
    #slitSlider .carousel-caption h2 {
        font-size: 2em !important;
        padding: 0 5px;
        letter-spacing: 0.5px;
        line-height: 35px;
        margin-bottom: 25px;
    }

    #slitSlider .carousel-caption h3 {
        font-size: 1.5em;
        letter-spacing: 0.5px;
        line-height: 28px;
        margin-bottom: 25px;
    }

    #slitSlider .carousel-caption a {
        font-size: 14px;
    }

	/* navigation */
	.navbar-fixed-top {
		padding-bottom: 10px;
    }

    .navbar-inverse .navbar-toggle,
	.navbar-inverse .navbar-toggle .icon-bar {
        border-color:  <?php echo $borderColor ?>;
        border-radius: 0;
    }

    .navbar-inverse .navbar-toggle:hover {
        border-color:  <?php echo $linkHoverColor ?>;
        background-color: <?php echo $navbarBackgroundColor ?>;
        border-radius: 0;
    }

    .navbar-inverse .navbar-toggle .icon-bar:hover {
        background-color: <?php echo $bodyCopyColor ?>;
    }

    .navbar-collapse.in {
        overflow-y: inherit;
    }

    .navbar-brand {
        padding: 10px 0 10px 10px;
    }

    .navbar-toggle {
        margin-top: 22px;
    }
    .navbar-inverse .navbar-nav li a {
        line-height: 45px;
        padding: 0;
        font-size: 1.25em;
        text-align: center;
        border-bottom: 1px solid transparent;
    }
    .navbar-nav {
        margin: 0 -15px;
        background-color: <?php echo $navbarBackgroundColor ?>;
    }
    .navbar-inverse .navbar-nav>li>a.current, .navbar-inverse .navbar-nav>li>a:hover {
        background-color: <?php echo $navLinkColor ?>;
        border-bottom: 1px solid <?php echo $defaultCopyColor ?>;
        color: <?php echo $defaultCopyColor ?>;
    }
    .navbar-inverse .navbar-nav>li {
        padding-right: 0;
    }
    .navbar-inverse.smaller .navbar-nav>li>a {
        padding: 0;
    }
    
    .carousel-caption img {
        width: 70%;
    }
    #slitSlider .carousel-caption h2 {
        font-size: 2em !important;
        padding: 0 5px;
        margin-bottom: 25px;
    }
    #slitSlider .carousel-caption h3 {
        font-size: 20px;
        margin-bottom: 25px;
    }
    #slitSlider .carousel-caption a {
        font-size: 14px;
    }
    .about-content {
        margin-bottom: 50px;
    }
    .wrap-about {
        margin: 0 auto 80px;
        width: 85%;
    }
    .device {
        margin-bottom: 30px;
    }
    .device img {
        margin: 0 auto;
    }
    .counters-item {
        margin: 0 auto 20px;
        width: 270px;
    }
    #services .title {
        padding-bottom: 60px;
    }    
    .service-block {
        margin: 0 auto 30px;
        width: 90%;
        position: relative;
        left: -8px;
    }    
	.team-mate {
		margin: 0 auto 31px;
		width: 280px;
	}

    .team-mate img {
        margin: 0 auto;
    }

    .member-info ul {
        text-align: center;
        margin-bottom: 10px;
    }
    .pricing {
        margin: 0 auto 20px;
        width: 280px;
    }

    .sub-title h3 {
        font-size: 18px;
    }
    #blog {
        padding-bottom: 0;
    }	
    .note {
        margin-bottom: 30px;
        font-size: 1.25em;
    }
    .note .excerpt {
        padding: 0 20px 20px;
    }
    .note .excerpt h3 {
    	font-size: 1.5em;
    }
    .contact-info {
        margin: 0 0 30px;
        width: 100%;
    }
    .blog-title h1 {
        font-size: 28px;
    }
    #blog-page {
        margin: 0;
    }
    #blog-posts {
        margin: 0 0 40px;
    }
    .post-excerpt h3 {
        font-size: 1.25em;
    }	
}

/*============================================================
	Mobile (Landscape) Design for a width of 480px
==============================================================*/

@media only screen and (min-width: 480px) and (max-width: 767px) {

	/* navigation */
    .navbar-fixed-top {
        padding-bottom: 10px;
    }
    .navbar-brand {
        padding: 10px 0 10px 10px;
    }
    .navbar-inverse .navbar-toggle {
        border-color: <?php echo $borderColor ?>;
        border-radius: 0;
    }
    .navbar-inverse .navbar-toggle:hover {
        border-color: <?php echo $linkHoverColor ?>;
        background-color: <?php echo $navbarBackgroundColor ?>;
        border-radius: 0;
    }
    .navbar-collapse.in {
        overflow-y: inherit;
    }
    .navbar-toggle {
        margin-top: 22px;
    }
    .navbar-inverse .navbar-nav li a {
        line-height: 45px;
        padding: 0;
        font-size: 1.25;
        text-align: center;
        border-bottom: 2px solid transparent;
    }
    .navbar-nav {
        background-color: <?php echo $navbarBackgroundColor ?>;
    }
    .navbar-inverse .navbar-nav > li > a.current,
	.navbar-inverse .navbar-nav > li > a:hover {
        background-color: <?php echo $linkHoverColor ?> !important;
        border-bottom: 2px solid <?php echo $defaultCopyColor ?>;
        color: <?php echo $defaultCopyColor ?>;
    }
    .navbar-inverse .navbar-nav>li {
        padding-right: 0;
    }
    .navbar-inverse.smaller .navbar-nav>li>a {
        padding: 0;
    }
    #slitSlider .carousel-caption h2 {
        font-size: 2em !important;
        padding: 0 5px;
    }
    #slitSlider .carousel-caption h3 {
        font-size: 25px;
    }
    #slitSlider .carousel-caption a {
        font-size: 14px;
    }
    .carousel-caption img {
        width: 50%;
    }    
    .btn {
    	font-size: 1.125em;
    }
    .wrap-about {
        margin: 0 auto 75px;
        width: 70%;
    }
    .note {
        margin: 0 auto 30px;
        width: 75%;
        font-size: 1.125em;
    }
    .counters-item {
        margin: 0 auto 25px;
    	width: 60%;
    }
    .service-block {
        margin: 0 auto 40px;
        width: 65%;
    }
    .team-mate {
        margin: 0 auto 30px;
        text-align: center;
        width: 280px;
    }
    .team-mate img {
        margin: 0 auto;
    }
    .pricing {
    	margin: 0 auto 40px;
    	width: 70%;
    }
    #blog {
        padding-bottom: 0;
    }
    #contact-form {
        width: 90%;
    }
    .contact-info {
        width: 100%;
    }
}