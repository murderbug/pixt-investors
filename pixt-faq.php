<?php
 ob_start();
 session_start();
 require( "cms/config.php" );
 require_once 'cms/dbconnect.php';
 require_once 'cms/company_db.php';
 
 ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Pixt | Frequently Asked Questions</title>
		
        <meta name="description" content="description">
		
		<!-- Mobile Specific Meta
		================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Favicon -->
<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
<link rel="manifest" href="/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
		
		<!-- CSS
		================================================== -->
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- bootstrap.min css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.php?v=<?php echo rand() ?>">
        
		
		
		<!-- Modernizer Script for old Browsers -->
        <script async src="js/modernizr-2.6.2.min.js"></script>
        
        
    	
        <style>
        	h4{
        		padding: 60px 0 0;
        	}
        	
        	dt{
        		padding: 15px 0 5px;
        		font-size: 1.125em;
        		color: #6CB670;
        	}
        	
        	dd{
        		padding-bottom: 10px 0 20px 10px;
        	}
        	.post-item dl.toc{
        		padding-top: 0px !important;
        	}
	        @media (min-width: 980px) and (max-width: 1150px) {
	        	.post-item dl.toc dd{
	        		display: block !important;
	        		float: none !important;
	        		padding-bottom: 0px !important;
	        		font-size: 1em;
	        	}
	        }
	        
	        @media (min-width: 768px) and (max-width: 979px) {
		        .post-item dl.toc dd{
		        	display: block !important;
		        	float: none !important;
		        	padding-bottom: 10px !important;
		        	font-size: 1.12em;
		        }
	        }
	        
	        @media only screen and (max-width: 767px) {
		        .post-item dl.toc dd{
		        	display: block !important;
		        	float: none !important;
		        	padding-bottom: 10px !important;
		        	font-size: 1.25em;
		        }
	        }
	        
	        @media only screen and (min-width: 480px) and (max-width: 767px) {
		        .post-item dl.toc dd{
		        	display: block !important;
		        	float: none !important;
		        	padding-bottom: 10px !important;
		        	font-size: 1.25em;
		        }
	        }
	        
	        
        </style>

    </head>
	
    <body class="blog-page">
        <?php include 'includes/sub-nav.php' ?>
        
        
        <!-- Start Blog Banner
        ==================================== -->
        <section id="blog-banner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="blog-icon">
                            <i class="fa fa-question-circle fa-5x"></i>
                        </div>
                        <div class="blog-title" id="top">
                            <h1>Frequently Asked Questions</h1>
                        </div>
                    </div>     <!-- End col-lg-12 -->
				</div>	    <!-- End row -->
			</div>       <!-- End container -->
		</section>    <!-- End Section -->
        
        
        <!-- Start Blog Post Section
        ==================================== -->
        <section id="blog-page">
            <div class="container">
                <div class="row">
                   
                    <div id="blog-posts" class="col-md-8 col-sm-8">
                        <div class="post-item">
                           
                           <!-- Single Post -->
                            <article class="entry">
								<div class="post-excerpt">
									<h3 class="color">You've got questions? We've got answers.</h3>
									<p class="clearfix">&nbsp;</p>
									<div class="col-md-6">
										<dl class="toc" style="padding: 25px 2em 0 0;">
											<dt>About Pixt</dt>
											<dd><a href="#what"><i class="fa fa-angle-right"></i> &nbsp;What is Pixt?</a></dd>
											<dd><a href="#problems"><i class="fa fa-angle-right"></i> &nbsp;What Problems Does Pixt Solve?</a></dd>
											<dd><a href="#competition"><i class="fa fa-angle-right"></i> &nbsp;Who is the Competition?</a></dd>
											<dd><a href="#michael"><i class="fa fa-angle-right"></i> &nbsp;Who is the Pixt Team?</a></dd>
											<dt>Funding and Projections</dt>											
											<dd><a href="#funding"><i class="fa fa-angle-right"></i> &nbsp;About Convertible Loan Funding.</a></dd>
											<dd><a href="#valuation"><i class="fa fa-angle-right"></i> &nbsp;What is the Valuation Pixt?</a></dd>
											<dd><a href="#spend"><i class="fa fa-angle-right"></i> &nbsp;Pixt Funding Distribution</a></dd>	
											<dt>Business Outlook</dt>
											<dd><a href="#revenue"><i class="fa fa-angle-right"></i> &nbsp;How Will Pixt Make Money?</a></dd>
											<dd><a href="#swot"><i class="fa fa-angle-right"></i> &nbsp;Strengths and Weaknesses.</a></dd>
											<dd><a href="#exit"><i class="fa fa-angle-right"></i> &nbsp;What is Pixt's Exit Strategy?</a></dd>									
										</dl>
									</div>
									<div class="col-md-6">										
											<dl class="toc" style="padding: 25px 2em 0 0;">
												<dt>Our Audiences</dt>
												<dd><a href="#audience"><i class="fa fa-angle-right"></i> &nbsp;Who is Pixt's Target Audience?</a></dd>
												<dd><a href="#why-pixt"><i class="fa fa-angle-right"></i> &nbsp;Why Will People Use Pixt?</a></dd>
												<dd><a href="#where"><i class="fa fa-angle-right"></i> &nbsp;Where Will Pixt Launch?</a></dd>
												<dd><a href="#emerging"><i class="fa fa-angle-right"></i> &nbsp;Reaching Emerging Markets.</a></dd>
												<dt>Pixt Technology</dt>
												<dd><a href="#patents"><i class="fa fa-angle-right"></i> &nbsp;About Our Patents.</a></dd>											
											</dl>
									</div>
									
									<p class="clearfix">&nbsp;</p>
									<section class="col-md-12">
										<!--<div class="row">									
											<?php include 'includes/confidentiality-notice.php' ?>
										</div>-->
									</section>
									<section class="col-md-12" id="what">
											<div class="row">
												<h4 class="color">What Is Pixt?</h4>
												<!--<p>Since the introduction of mobile phones in the consumer market, we’ve known that mobile devices would become intrinsic to the daily lives of people worldwide&mdash;how we learn, communicate, share and are informed. Long before the first iPhone was sold, we saw the future and recognized the power of mobile and we invented a platform that would place that power in everybody's hands.</p>
												<p>Our background is in working with <a href="https://www.wearekizmo.com" class="color" target="_blank">startups and global brands</a> to launch digital products. But we were inspired to invent Pixt because we've seen how the people can have immense impact on culture and society&mdash;from music festivals to natural disasters to the palm tree farmers in Sumatra&mdash;how events are reported, and the evolution of information sharing created by a small device we hold in our hands every day.</p> -->
												<p>Pixt is a first of its kind application that's powered by people taking photos and videos with their mobile devices to upload and share. Our unique Artificial Intelligence collects, categorizes and creates live stories of all of the collected data in real time.</p>
												<p>Pixt is powered by PixtBot&mdash;an innovative artificial intelligence that is set up to listen and search across the web, chat and social media platforms&mdash;allowing our users to communicate, search, and ask questions in natural language (e.g., "PixtBot, show me the women's march in Washington"). PixtBot will also receive our users' uploads and messages to pass on to Pixt's Artificial Intelligence to create live stories in microseconds.</p>
												<p>We hold two patents supporting the invention, development, and public launch of Pixt, with others to come.</p>
												<a href="javascript:;" class="color scrollUp"><i class="fa fa-arrow-circle-up"></i> Back to top</a>
											</div>
									</section>
									<section class="col-md-12" id="problems">
											<div class="row">
												<h4 class="color">What Problems Does Pixt Solve?</h4>
												<p>Pixt will generate live stories based on time, location, source, tags, and other metadata—and simultaneously battle the problem of fake news and internet trolling—by compiling countless media files that people around the world upload through any medium, including the Pixt app, website, or any chat/messenger service, such as WhatsApp, Facebook Messenger, Line, WeChat and more.</p>
												<p>Pixt will be the central resource where news agents, media channels, brands and others can purchase licenses to images and videos, creating a new marketplace for over 3 billion images and videos uploaded every day by people like you and us.</p>
												<a href="javascript:;" class="color scrollUp"><i class="fa fa-arrow-circle-up"></i> Back to top</a>
											</div>
									</section>
									<section class="col-md-12" id="competition">
											<div class="row">
												<h4 class="color">Who is the Competition?</h4>
												<p>Every business has competition. We embrace ours.</p>
												<p><strong>Facebook, Instagram, Google, etc.</strong><br />Pixt competes for usage and mind-share against the giants of social media. They’re competitors in all aspects of user numbers, scale and revenue. Pixt will embrace these services as marketing channels, providing us extensive reach at a lower media-buying cost (we know the advertising business).</p>
												<ul style="list-style-type:square;padding: 0 2em;">
													<li><p>Their business model is primarily social media for sharing, commenting, and liking user uploads (which benefits us).</p></li>
													<li><p>They all claim IP ownership of every image and video uploaded to their social platforms. <br /><strong>Meanwhile, Pixt profits by our users keeping their IP ownership</strong>.</p></li>
													<li><p>Every Pixt image and video that is shared to our competitors' platforms will have a “Paid by Pixt” border on it (very similar to the bylines that The Associated Press, Reuters, and Getty use), building recognition for the Pixt platform.</p></li>
													<li><p>Pixt will be actively marketing on our competitors’ platforms, sharing our PixtBot AI generated articles to drive users to the Pixt service, similar to the major news agencies.</p></li>
													<li><p>Pixt will leverage our competitors' chat platforms—including Facebook Messenger, Twitter, WhatsApp, WeChat, Google Hangouts, and more—through our PixtBot, that will listen and communicate with those platforms’ audiences.</p></li>
												</ul>
												<div class="clearfix">&nbsp;</div>
												
												<p><strong>Global News Conglomerates and Tech Companies</strong></p>
												<ul style="list-style-type:square;padding: 0 2em;">
													<li><p>Many news agencies have created citizen-journalism upload (not sharing!) platforms for people to upload images and video. Those who upload their content are giving up their IP ownership rights. Again, Pixt profits by our users keeping their IP ownership.</p></li>
													<li><p>News Corporation acquired <a href="https://storyful.com/about/" target="_blank" class="color">Storyful</a> in 2013 for <a href="https://techcrunch.com/2013/12/20/news-corp-buys-storyful-for-25m-to-dig-up-verified-news-from-social-media-sites-like-twitter-and-instagram/" target="_blank" class="color">$25 Million USD.</a> Validating the need for passive fact-checking in journalism. The more people that share a picture or video of an event, the more factual it becomes.</p></li>
													<li><p>In 2016, The Washington Post, owned by Amazon CEO and founder Jeff Bezos, test-published it's first <a href="https://www.wired.com/2017/02/robots-wrote-this-story/?mbid=social_fb" target="_blank" class="color">article written by Artifical Intelligence</a>. This validates a core business feature of Pixt without challenging our technology or global purpose. And, in fact, sets Pixt up for acquisition.</p>
													<li><p>More recently, Google and Facebook have announced efforts to minimize the impact of fake news through their algorithms. Again, validating one of the core purposes of Pixt and setting up potential acquisition.</p></li>
												</ul>
												<div class="clearfix">&nbsp;</div>												
												
												<p><strong>The Stock Image and Video Business</strong></p>
												<ul style="list-style-type:square;padding: 0 2em;">
													<li><p>Stock image and video is a multi-billion dollar industry,  with Getty being the market leader (valued at <a href="http://www.bloomberg.com/news/articles/2012-08-23/gettys-pics-worth-1-000-words-and-3-dot-3-billion" target="_blank" class="color">over $3 billion USD</a>).</p></li>
													<li><p>Having worked in the advertising and marketing business, we know how much those industries depend on stock art <strong style="text-decoration: underline !important;">subscriptions</strong> to provide access to licensable media.</p></li>
													<li><p>While the marketing and advertising industries, and others, can purchase licenses for editorial images and video from stock art companies, the content they license is already in the past. The stock media business deals in <strong style="text-decoration: underline;">what was</strong>, not <strong style="text-decoration: underline;">what is</strong> (and let's face it, most stock art <em>looks like stock art</em>). Pixt's differentiator is that we focus on timeliness, <em>and it's real</em>. Again, setting up potential acquisition from  this industry.</p></li>
													<li><p>Content creators&mdash;photographers, videographers, and others&mdash;give up rights and have minimal ability to negotiate licensing fees for their content. Pixt profits from our users' ability to manage their own IP licensing structures.</p></li>
												</ul>
												
												<a href="javascript:;" class="color scrollUp"><i class="fa fa-arrow-circle-up"></i> Back to top</a>
											</div>
									</section>
									<section class="col-md-12" id="michael" >
											<div class="row">
												<h4 class="color">Who is the Pixt Team?</h4>
												<p><strong>Michael Lisboa</strong><br />
												Possesses over 20 years of experience as a leader in digital marketing, user experience and the technology space—developing online, social media, and mobile strategy and products for clients ranging from successful startups to global brands such as Oreo, Justin Timberlake and Citibank. Beginning in 1994, Michaelʼs company, Xaphon Interactive Media, was among the first new media companies to offer online marketing services to some of the most prominent companies in the world. Since 1997, Michael has been advocating experience-based, customer-centric marketing outreach.</p>
												<p>He has spoken at trade shows and written articles about this very topic, and he is frequently called upon to create and conduct workshops and to speak conferences and seminars throughout Southeast Asia. Michael has extensive experience with business and marketing consulting services, application development, social media, mobile and smartphone apps, and cloud-based applications.</p>
												<p>Fun fact, Michael conceived of, and invented our patents over a decade ago—long before the advent of smartphones!</p>
												<p><strong>Vicky Tan Hui Ying</strong><br />
												Began her career in marketing and account management and brings her experience in the advertising and public relations sectors to Pixt. Having worked with with some of the most recognized luxury hospitality brands in the world, as well as travel and boutique brands, she possesses a keen mind for business relations and product management. With local insights, Vicky brings key capabilities in partner relations and business development.</p>
												<p>She also led the social media and digital marketing function for the largest textile producer in Laos, developing a global digital communications strategy to drive awareness of the organization for high&ndash;end fashion houses and manufacturers around the world.</p>
												<a href="javascript:;" class="color scrollUp"><i class="fa fa-arrow-circle-up"></i> Back to top</a>
											</div>
									</section>
									<section class="col-md-12" id="funding">
											<div class="row">
												<h4 class="color">Convertible Loan Funding</h4>
												<p>Pixt will issue $150,000 USD in <a href="convertible-note-memo.php" class="color">Convertible Promissory Notes</a> to early-stage friends &amp; family and angel investors to fund the design and development of the Beta version, as well as some pre‐beta marketing and sales.</p>
												
												<p>Pixt is currently seeking to raise financing of $150,000 USD to fund product development until commercial launch, deploy its audience and close and implement strategic partnerships.  This funding will carry Pixt through early 2018, until it closes a Series A round with institutional investors or strategic partners.</p>	
												
												<p>Pixt is offering investors the opportunity to subscribe to convertible promissory notes under the following terms  and conditions:												
													<ul style="list-style-type:square;padding: 0 2em;">
														<li>5% interest rate</li>
														<li>Conversion into preferred shares upon closing of Series A at a discount</li>
														<li>Escalating discount from 5% to 15%</li>
													</ul>
												</p>
												<a href="javascript:;" class="color scrollUp"><i class="fa fa-arrow-circle-up"></i> Back to top</a>
											</div>
									</section>
									<section class="col-md-12" id="valuation">	
											<div class="row">
												<h4 class="color">What is the Valuation of Pixt?</h4>
												<p>As a pre-money start-up, determining a valuation is difficult. Although essential when seeking equity funding, a valuation can result in miscalculation or a challenge in valuation determined by VCs.</p>
												
												<p>So we have chosen to pursue friends &amp; family and angel investment in the form of <a href="convertible-note-memo.php" class="color">Convertible Loans</a>.</p>	
												
												<p>We have researched market size and projected growth over a 3-year period&mdash;taking cues from global mobile device penetration and global market growth of potential audience to arrive at a projected valuation.
									
													<ul style="list-style-type:square;padding: 0 2em;">
														<li>In 2014, more than <a href="http://www.businessinsider.com/were-now-posting-a-staggering-18-billion-photos-to-social-media-every-day-2014-5" target="_blank" class="color">1.8 billion images</a> were uploaded every day. This is not counting the unknown number of images shared through messaging apps.</li>
														<li>In 2015, more than <a href="http://tubularinsights.com/youtube-300-hours/" target="_blank" class="color">12 days worth of video</a> were uploaded to YouTube every 60 seconds.</li>
														<li>In 2017, Facebook announced <a href="https://www.statista.com/statistics/264810/number-of-monthly-active-facebook-users-worldwide/" target="_blank" class="color">1.8 billion</a> active users.</li>
														<li>Today that's about <strong style="text-decoration:underline">3 billion</strong> images and videos uploaded to the Internet every day. There are about 7.4 billion living people on earth today, <a href="https://en.wikipedia.org/wiki/World_population" target="_blank" class="color">60% of whom are in Asia</a>.</li>
													</ul>	
													
												</p>
												<p>We also looked at global statistics of mobile device usage, and content creation statistics to arrive at these assumptions:								
													<ul style="list-style-type:square;padding: 0 2em;">
														<li>If only <strong style="text-decoration:underline">0.001% of the 3 billion</strong> images and videos were uploaded directly to Pixt, that would be 30,000 images and videos uploaded every day.</li>
														<li>Let’s say only 5% of those images and videos were licensed or bought outright at only $1 USD each, that would average $1,500 USD per day. </li>
														<li>That would equal $547,500 USD&mdash;just in unique media licensing sales&mdash;in a full year of business. Media licensing isn't the only sales revenue Pixt will generate.</li>
													</ul>
												</p>	
												<p>We also looked at other businesses in similar spaces:
													<ul style="list-style-type:square;padding: 0 2em;">
														<li>Prior to its acquisition, Instagram was assumed to be <a href="https://techcrunch.com/2011/02/02/instagram-funding/" target="_blank" class="color">valued at more than $20 Million USD</a>.</li>
														<li>Two years after its foundation in 2010, Instagram was acquired by Facebook for <a href="http://www.zdnet.com/article/why-facebook-acquired-instagram-for-1-billion/" target="_blank" class="color">$1 Billion USD</a>.</li>
														<li>Storyful, founded in 2010, was acquired in 2013 by News Corp for <a href="https://techcrunch.com/2013/12/20/news-corp-buys-storyful-for-25m-to-dig-up-verified-news-from-social-media-sites-like-twitter-and-instagram/" target="_blank" class="color">$25 million USD</a>.</li>
														<li>Getty, currently valued at over $3 billion, got its start when it acquired Tony Stone Images for <a href="http://www.bloomberg.com/news/articles/2012-08-23/gettys-pics-worth-1-000-words-and-3-dot-3-billion" target="_blank" class="color">$30 million USD</a> in 1996.</li>
													</ul>
												</p>
												<a href="javascript:;" class="color scrollUp"><i class="fa fa-arrow-circle-up"></i> Back to top</a>
											</div>
									</section>
									<section class="col-md-12" id="spend">
											<div class="row">
												<h4 class="color">How Will Funding Be Distributed</h4>
												<p>More detailed information can be found in <a href="pixt-financials.php" class="color">our Financial Projections</a>. Below is a break down of some of the items for which funding will be distributed:</p>
												<p><strong>Company Setup</strong><br />Company setup includes fees for incorporation in Singapore, general accountancy services, legal corporate structure, as well as one time costs of equipment, and office technology needs. 
													<ul style="list-style-type:square;padding: 0 2em;">
														<li>Corporate bank accounts</li>
														<li>Legal and financial services</li>
														<li>Office infrastructure, including email server, web servers, data storage, etc.</li>
														<li>Computers and equipment for employees</li>
													</ul>
												</p>
												<p><strong>Ongoing Expenses</strong><br />Ongoing expenses are typically monthly payments and fees to maintain operations, have access to software and tools, and office staffing.
													<ul style="list-style-type:square;padding: 0 2em;">
														<li>Office space</li>
														<li>Hiring of office staff</li>
														<li>Office equipment, including printer/copy machine, desks, chairs, etc.</li>
														<li>Add-on paid services, such as Litmus, Basecamp, etc.</li>
														<li>Marketing and PR</li>
														<li>Media partners and business development</li>
														<li>Travel for business development, conferences and talks</li>
														<li>Registration fees for conferences and events</li>
													</ul>
												</p>
												<p><strong>Product Development</strong><br />Our product development team requires specialized capabilities to develop Artificial Intelligence and our PixtBot technology. These capabilities are lacking in Southeast Asia and will likely require that we recruit and relocate team members with these specialized skills. Standard app development team members will be hired locally. 
													<ul style="list-style-type:square;padding: 0 2em;">
														<li>Application Servers and hosting</li>
														<li>Developers for mobile apps (iOS and Android)</li>
														<li>Developers for web application</li>
														<li>Developers for social media API integration</li>
														<li>Specialist developers for Artificial Intelligence</li>
														<li>Specialist technical director for enterprise infrastructure</li>
														<li>Content delivery network (CDN) fees</li>
														<li>Cloud computing service fees</li>
													</ul>
												</p>
												<a href="javascript:;" class="color scrollUp"><i class="fa fa-arrow-circle-up"></i> Back to top</a>
											</div>
									</section>
									<section class="col-md-12" id="revenue">
											<div class="row">
												<h4 class="color">How Will Pixt Make Money?</h4>
												<p>Pixt is set up to generate revenue from multiple sources, including licensing, commerce, susbcriptions, and advertising revenue.</p>
												<ul style="list-style-type:square;padding: 0 2em;">
													<li><p><strong>Intellectual Property Licensing.</strong> News agencies, the advertising industry, publishers and more will be seeking to license content from Pixt's users. IP licensing deals can be negotiated by Pixt's automated bidding system, a personal Pixt IP Agent (in the case of large-scale, exclusive content), or by the individual. In all cases, Pixt will receive a percentage of these licensing deals, from 15% to 35% for negotiated deals.</p></li>
													<li><p><strong>The Pixt Marketplace.</strong> The Pixt Marketplace is our e-commerce solution for timely, and real, user generated content that can be purchased outright or through a rolling licensing agreement.</p>
													<p>We expect the Pixt Marketplace to be among the most highly trafficked services of Pixt, as we will be competing with the stock art industry, yet providing timely and real content&mdash;something the major players such as Getty are challenged to provide.</p></li>
													<li><p><strong>Subscriptions.</strong> The Pixt subscription model will allow users to purchase monthly or annual subscriptions to receive notifications when large scale events occur.</p>
													<p>For example, a journalist for Rolling Stone Magazine may set up notifications for a large music festival, such as Coachella, to receive alerts when a particular artist is performing based on the number of image and video uploads by people present at the event. He can then scan through the uploaded content and choose to license media files for an article he may be writing.</p>
													<p>Subscription fees will start at $99 USD/month or $1,000 USD/year.</p></li>
													<li><p><strong>Ad Revenue.</strong> The public facing Pixt responsive website will be the source for our audiences to stay on top of world events <strong>as they happen</strong>. Imagine a social media enabled news site generated entirely by an Artificial Intelligence that's constantly listening, collecting and organizing content uploaded by people around the world.</p>
													<p>We will market the Pixt website through social media and other channels to drive traffic and page views, setting us up to generate revenues from CPM, CPA, programmatic‐based advertising sales and sponsored content.</p></li>
												</ul>
												<a href="javascript:;" class="color scrollUp"><i class="fa fa-arrow-circle-up"></i> Back to top</a>
											</div>
									</section>
									
									<section class="col-md-12" id="swot">
											<div class="row">
												<h4 class="color">Strengths, Weaknesses, and Opportunities.</h4>
												<p>While Pixt is intended to create a new standard of content creation for consumers, journalism, advertising and media, we have a very real view of how we will launch, scale and grow globally.</p>
												<p><strong>Strengths</strong>
													<ul style="list-style-type:square;padding: 0 2em;">
														<li>
															<p>Pixt's strengths lie in the capabilities that our team brings with over 25 years’ experience in user experience, technology, web services, mobile and social media.</p>
															<p>In fact, Michael first developed a method for uploading and sharing photos by mobile phone to a website via email and SMS in 2002&mdash;long before there were smartphones and apps!</p>
														</li>
														<li>
															<p>The major, global tech companies have <a href="https://www.bloomberg.com/news/articles/2014-01-30/google-s-motorola-sale-underscores-primacy-of-patents" class="color" target="_blank">invested substantially in intellectual property</a> simply to compete. Our exclusive patents, owned by Michael Lisboa, put us in a unique position for negotiations for valuation, and acquisition or IPO.</p>
														</li>
														<li>
															<p>The technology innovations of Pixt are an industry first. Leveraging AI, machine learning and people's natural behavior to upload and share their content (particularly GenY and GenZ), we expect our content inventory to scale at increasingly accelerated rates, leading to aggressive growth in sales and partnerships with major media organizations.</p>
														</li>
													</ul>
												</p>
												<p><strong>Weaknesses</strong>
													<ul style="list-style-type:square;padding: 0 2em;">
														<li>
															<p>To date, we've been bootstrapping and have invested over $100,000 USD to develop the Pixt business, however our personal funding is limited.</p>
														</li>
														<li>
															<p>Although what Pixt is offering is a disruptive shift&mdash;and will have global impact in multiple industries and in how people share content&mdash;it is a new idea, and a new way of doing things. Pixt could face slow growth initially as it invests in marketing and the right partnerships to shift audience perception and establish an active user base. This slow growth will impact our ability to generate revenue quickly, as Pixt is currently bootstrapping, to build what we are confident will be a successful business.</p>
														</li>
														<li>
															<p>Our ability to build a product development team is hampered due to financial constraints, as well as the lack of talent and capabilities of technologists in the region. We will need to offer compelling compensation packages to attract the best and most knowledgeable people possible. In addition, Southeast Asia lacks the capabilities we require, particularly AI programmers and infrastructure developers, as a result we will have to recruit and relocate specialists from overseas.</p>
														</li>
													</ul>
												<p><strong>Opportunities</strong>
													<ul style="list-style-type:square;padding: 0 2em;">
														<li>
															<p>Pixt's audiences vary from content consumers to IP license buyers and sellers, including news agencies, the advertising industry, media companies, publishers, and the public consumer. This expansive user base provides us with many revenue opportunities beyond the standard ad revenue model of social media and content publishing platforms and websites.</p>
														</li>
														<li>
															<p>Pixt is designed to allow <strong>anybody with an internet connection</strong> to upload and share their stories&mdash;whether through the Pixt app, website, SMS, chat, email, or other channels&mdash;a capability lacking in popular social media platforms such as Instagram, Snapchat and others. This will allow us to take advantage of a much broader user base of the <a href="http://www.mobileconnectivityindex.com/widgets/connectivityIndex/pdf/ConnectivityIndex_V01.pdf" class="color" target="_blank">more than 3 billion</a> people using <a href="https://en.wikipedia.org/wiki/Feature_phone" class="color" target="_blank">feature phones</a> in emerging markets.</p>
															<p>Imagine the global impact of a 12-year old Somali girl who can immediately share powerful and newsworthy images of a warlord invasion in her town. Or a farmer who can ask for help from around the world because of a flood in a rural island village in southern Indonesia.</p>
															<p>Now imagine that they can get paid by global news agencies by licensing those images&mdash;and we can help them.</p>
														</li>
													</ul>
												</p>
												<a href="javascript:;" class="color scrollUp"><i class="fa fa-arrow-circle-up"></i> Back to top</a>
											</div>
									</section>
									<section class="col-md-12" id="exit">
											<div class="row">
												<h4 class="color">What is Pixt's Exit Strategy?</h4>
												<p>The business model and technology innovations of Pixt will become the foundation for a global business. The first of its kind coming out of Asia.</p>
												<p>Our preferred exit strategy is an acquisition by a top technology company&mdash;such as Google, Facebook, Amazon, or other large technology or media companies&mdash;and our business plan has been developed with that in mind, to ensure that Pixt is built to the optimum size for acquisition. Alternatively, under the right circumstances, Pixt would be suitable for a stock market floatation.</p>
												<a href="javascript:;" class="color scrollUp"><i class="fa fa-arrow-circle-up"></i> Back to top</a>
											</div>
									</section>
									
									<section class="col-md-12" id="audience">
											<div class="row">				
												<h4 class="color">Who is Pixt's Target Audience?</h4>
												<p>In the broadest sense, Pixt will target mobile phone users who actively take photos with their phones, are active in social media, and actively seek out, create and share news and content on the Internet.
													<ul style="list-style-type:square;padding: 0 2em;">
														<li>Approximately 68% of active Facebook users are <a href="http://wearesocial.com/blog/2017/01/digital-in-2017-global-overview" target="_blank" class="color">between 13 and 35 years old (Gen Z, GenY)</a> providing us with a clear view of who our active audience will be.</li>
														<li><a href="https://blogs.adobe.com/digitalmarketing/personalization/sick-hearing-millennials-read/" class="color" target="_blank">More than half of Millennials (GenY)</a> and Screenagers (GenZ) have identified themselves as content creators, and 75% of them share content online.</li>
														<li>Over 75% of this group reported preferring to <a href="http://www.business2community.com/marketing/know-market-millennials-01576096#RKedCqWQwhEJK8dl.97" class="color" target="_blank">spend money on a desirable experience</a> over buying something that is just desirable. <strong>These users are focusing on personal experiences and creating content to share those experiences with the world.</strong></li>
													</ul>
												</p>
												<a href="javascript:;" class="color scrollUp"><i class="fa fa-arrow-circle-up"></i> Back to top</a>
											</div>
									</section>
									<section class="col-md-12" id="why-pixt">
											<div class="row">
												<h4 class="color">Why Will People choose to Use Pixt (over other options such as Facebook, YouTube or Instagram)?</h4>
												<p>This is the core of the Pixt marketing strategy. Here's a two part answer:</p>
												<ul style="list-style-type:square;padding: 0 2em;">
													<li><p>We don't want to take users away from Facebook, Instagram, etc., in fact, we will leverage those very same users to grow our marketshare. Pixt is designed to be ubiquitous across all platforms and devices. PixtBot will be living on all viable platforms, including WhatsApp, WeChat, Line, Facebook Messenger, and more to receive, categorize, and contextualize the images and videos that people upload.</p>
													<p>The established social media and online channels will be feeding into the Pixt platform through our artificial intelligence and bot technology.</p></li>
													<li><p>More importantly, our users maintain rights and can monetize the countless images, videos, and posts they upload. Other social media platforms claim IP ownership of the media files that people upload, however Pixt actually profits by our users owning their IP and monetizing that content in the Pixt Marketplace through licensing deals.</p>
													<p>In short, our audience will benefit financially by using Pixt, not to mention the social and emotional benefit of being part of a bigger, and often a socially and environmentally powerful story.</p>
													<p>Pixt is the great disruption of news media, content, advertising and media.</p>
													<p>We suppose you could say, "Pixt is the Uber of photography and content".</p>
													</li>
												</ul>
												<a href="javascript:;" class="color scrollUp"><i class="fa fa-arrow-circle-up"></i> Back to top</a>
											</div>
									</section>									
									<section class="col-md-12" id="where">
											<div class="row">					
												<h4 class="color">Where Will Pixt launch?</h4>
												<p>Pixt’s very deliberate focus on launching in Asia will establish the business with an enormous audience base and market opportunity.
													<ul style="list-style-type:square;padding: 0 2em;">
														<li>About 60% of the world's 7.5 billion people <a href="https://en.wikipedia.org/wiki/World_population" target="_blank" class="color">reside in Asia</a>.</li>
														<li>The majority of Southeast Asia markets maintain an over <a href="http://wearesocial.com/blog/2017/01/digital-in-2017-global-overview" class="color" target="_blank">70% mobile phone penetration, with some markets as high as 149% (Singapore)</a>. SEA is a truly mobile first region.</li>
														<li><a href="http://wearesocial.com/blog/2017/01/digital-in-2017-global-overview" class="color" target="_blank">Southeast Asia</a> users consume more content <a href="https://www.ericsson.com/mobility-report" class="color" target="_blank">via mobile devices</a> than North America and Europe combined.</li>
														<li>More than <a href="http://wearesocial.com/blog/2017/01/digital-in-2017-global-overview" class="color" target="_blank">90% of people in the Asia-Pacific region</a> have a mobile phone subscription.</li>
														<li>Pixt’s innovative technology is a market first. Other technology companies with innovative products and massive adoption have typically come out of the United States or Europe. This is an opportunity for the Asian market to launch a first of its kind mobile-tech startup.</li>
														<li>Pixt will grow a massive user base in Asia, creating opportunities to extend and grow our audience globally.</li>
														<li>Production costs in Southeast Asia are typically at least 20% to 30% lower than the United States or Europe.</li>
													</ul>
												</p>
												<a href="javascript:;" class="color scrollUp"><i class="fa fa-arrow-circle-up"></i> Back to top</a>
											</div>
									</section>
									<section class="col-md-12" id="emerging">
											<div class="row">
												<h4 class="color">How Will Pixt Reach Emerging Markets?</h4>
												<p>Over 3 billion people in the world are accessing the mobile web via <a href="https://en.wikipedia.org/wiki/Feature_phone" class="color" target="_blank">feature phones</a>. PixtBot will be designed to service all users with an internet connection, whether they have the latest iPhone or a low-end feature phone. This opens opportunities to reach audiences in rural areas and emerging markets, empowering them to share their often forgotten stories.
													<ul style="list-style-type:square;padding: 0 2em;">
														<li>Feature phone users are a huge growth opportunity for Pixt as <a href="http://www.mobileconnectivityindex.com/widgets/connectivityIndex/pdf/ConnectivityIndex_V01.pdf" class="color" target="_blank">42% of total global mobile connections</a> are made using <a href="http://wearesocial.com/blog/2017/01/digital-in-2017-global-overview" class="color" target="_blank">feature phones</a>, primarily in <strong>highly populated emerging markets</strong>.</li>
														<li>A feature phone is a mobile phone that incorporates features such as the ability to access the Internet and take pictures, but lacks the advanced functionality of a smartphone or the ability to install many apps from the Apple App Store or Google Play. Other services in the social media and mobile app industries underserviced or provide no service for these users. This creates a great opportunity for Pixt to reach <strong>3.38 billion users</strong> of feature phones.</li>
													</ul>
												</p>
												<a href="javascript:;" class="color scrollUp"><i class="fa fa-arrow-circle-up"></i> Back to top</a>
											</div>
									</section>
									
									<section class="col-md-12" id="patents">
											<div class="row">
												<h4 class="color">How Have the Patents Been Valued?</h4>
												<p>Our patents have a combined valuation of $90 Million USD determined by Keith THADDEUS of iP Firm, a Singapore-based intellectual property firm.</p>
												<p>The Pixt patents are currently referenced by some of the largest and most valuable companies in the world, including Facebook, Google, and Twitter.
													<ul style="list-style-type:square;padding: 0 2em;">
														<li><a href="https://www.google.com/patents/US8713094" class="color" target="_blank">Event&ndash;associating software application for accessing digital media</a><br />Publication number: US8713094 B2<br />Date: Nov 21, 2009</li>
														<li><a href="https://www.google.com/patents/US9084071" class="color" target="_blank">Simple mobile registration mechanism enabling automatic registration via mobile devices</a><br />Publication number: US9084071 B2<br />Date: Sep 10, 2009</li>
													</ul>
												</p>
												<a href="javascript:;" class="color scrollUp"><i class="fa fa-arrow-circle-up"></i> Back to top</a>
											</div>
									</section>
									
								</div>
                            </article>
							
                            <!-- End Single Post -->

                        </div>
                    </div>
                    
                    <!-- Widget Section -->
                    <div id="right-sidebar" class="col-md-4 col-sm-4">
                       
                       <!-- Single Widget -->
                        <aside class="widget wow fadeInDown">								
							<div class="widget-content">								
								<!-- tab content -->
								<div class="tab-content">
									<article>
										<div>
											<div class="text-center">
												<a href="pixt-story.php"><i class="fa fa-photo fa-5x"></i></a>
											</div>
											<a href="pixt-story.php"><h3 class="text-center">The Pixt Story Presentation</h3></a>
											<p class="text-center">The Pixt story presentation is a fun read and answers many questions. You can <a href="pixt-story.php" style="text-decoration: underline;">get it here</a>.</p>
										</div>
										<p class="clearfix" style="padding: 5px 0 20px;">&nbsp;</p>
										<div>
											<div class="text-center">
												<a href="pixt-financials.php"><i class="fa fa-file-excel-o fa-5x"></i></a>
											</div>
											<a href="pixt-financials.php"><h3 class="text-center">Pixt Financial Projections</h3></a>
											<p class="text-center">We know what's important. Take a look at <a href="pixt-financials.php" style="text-decoration: underline;">our financial projections</a> and let's chat.</p>
											
										</div>
									</article>							
									
								</div>
								<!-- /tab content -->
								
							</div>
                        </aside>
                        <!-- End Single Widget -->
                        
                    </div>
                    <!-- End Widget Section -->

				</div>	    <!-- End row -->
			</div>       <!-- End container -->
		</section>    <!-- End Section -->
		
		<?php include 'includes/contact.php' ?>
		<?php include 'includes/footer.php' ?>
		
		<!-- Main jQuery -->
		<script src="js/jquery-1.11.0.min.js"></script>
		<!-- Bootstrap 3.1 -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Highlight menu item -->
		<script src="js/jquery.nav.js"></script>
		<!-- Sticky Nav -->
		<script src="js/jquery.sticky.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing-1.3.pack.js"></script>
		<!-- wow.min Script -->
		<script src="js/wow.min.js"></script>
		<!-- Custom js -->
		<script src="js/custom-sub.js"></script>
		
		<script type="text/javascript">
	    	$('.toc').onePageNav({
	    		currentClass: 'current',
	    		changeHash: false,
	    		scrollSpeed: 1500,
	    		scrollThreshold: 0.5,
	    		filter: '',
	    		easing: 'easeInOutExpo'
	    	});
	    	
	    	$(window).scroll(function() {
	    		if ($(window).scrollTop() > 400) {
	    			$(".scrollUp").fadeIn(200);
	    		} else {
	    			$(".scrollUp").fadeOut(200);
	    		}
	    	});
	    	
	    	$('.scrollUp').click(function() {
	    		$('html, body').stop().animate({
	    			scrollTop : 0
	    		}, 1500, 'easeInOutExpo');
	    	});
		</script>

    </body>
</html>
<?php ob_end_flush(); ?>